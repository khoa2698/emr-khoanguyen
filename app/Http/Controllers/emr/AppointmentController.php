<?php

namespace App\Http\Controllers\emr;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Requests\emr\appointment\AppointmentRequest;
use App\Mail\Appointment as MailAppointment;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class AppointmentController extends Controller
{
    public function showPatientAccepted()
    {
        return view('admin.appointments.homeVerified', [
            'appointmentVerifieds' => Appointment::where('email_verified_at', '!=', null)->orderByDesc('updated_at')->paginate(10)->withQueryString(),
        ]);
    }

    public function showPatientPending()
    {
        // dd(count(Appointment::where('email_verified_at', '!=', null)->get()));
        return view('admin.appointments.home', [
            'paginatePendings' => Appointment::where('email_verified_at', null)->orderByDesc('created_at')->paginate(10)->withQueryString(),
            'appointmentPendings' => Appointment::where('email_verified_at', null)->get(),
            'paginateVerifieds' => Appointment::where('email_verified_at', '!=', null)->orderByDesc('updated_at')->get(),
            'appointmentVerifieds' => Appointment::where('email_verified_at', '!=', null)->get()
        ]);
    }

    public function index()
    {
        return view('web.appointment.index');
    }

    public function store(AppointmentRequest $appointmentRequest)
    {
        // dd($appointmentRequest->all());
        if(!empty($appointmentRequest->services)) {
            $services = implode(', ', $appointmentRequest->services);
        } else {
            $services = '';
        }
        $token = Str::random(64);
        try{
            DB::beginTransaction();
            Appointment::create([
                'name' => $appointmentRequest->name,
                'email' => $appointmentRequest->email,
                'phone' => $appointmentRequest->phone,
                'date' => $appointmentRequest->date,
                'time' => $appointmentRequest->time,
                'address' => $appointmentRequest->address,
                'gender' => $appointmentRequest->gender,
                'services' => $services,
                'more_info' => $appointmentRequest->more_info,
                'token' => $token
            ]);
            $new_appointment = Appointment::where('token', $token)->first();
            if(!empty($new_appointment)){
                Mail::to($appointmentRequest->email)->send(new MailAppointment($new_appointment));
            }
            DB::commit();
            return redirect()->route('appointmentPatient.index')->withSuccess('Kiểm tra tin nhắn đến email');

        } catch(\Exception $err) {
            DB::rollBack();
            return redirect()->route('appointmentPatient.index')->withErrors($err->getMessage());
        }

    }

    public function appointmentProcess($token)
    {
        try{
            $update = Appointment::where('token', $token)->update(['email_verified_at' => Carbon::now()]);
            Session::flash('success', 'Đặt lịch thành công');
        } catch(\Exception $err) {
            Session::flash('error', $err->getMessage());
        }   
        return view('web.appointment.appointmentverified');
    }

    // public function emailVerified($token)
    // {
    //     try{
    //         $update = Appointment::where('token', $token)->update(['email_verified_at' => Carbon::now()]);
    //         // dd($update);
    //         return redirect()->route('appointmentPatient.verified.get', $token)->withSuccess('Đặt lịch thành công');
    //     } catch(\Exception $err) {
    //         return redirect()->route('appointmentPatient.verified.get', $token)->withErrors($err->getMessage());
    //     }
    // }
}
