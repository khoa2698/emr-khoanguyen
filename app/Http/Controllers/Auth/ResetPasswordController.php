<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPasswordRequest;
use App\Mail\ResetPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ResetPasswordController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view('auth.forgotpasswordform');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $user = User::select('email')->where('email', $request->email)->first();
        if (!empty($user)) {

            try {
                DB::beginTransaction();
                $token = Str::random(64);
                DB::table('password_resets')->insert([
                    'email' => $request->email,
                    'token' => $token,
                    'created_at' => Carbon::now()
                ]);

                Mail::to($request->email)->send(new ResetPassword($token));
                DB::commit();
                return redirect()->back()->withSuccess('Một tin nhắn được gửi đến email của bạn');
            } catch (\Exception $err) {
                DB::rollBack();
                return redirect()->back()->withErrors($err->getMessage());
            }
        } else {
            return redirect()->back()->withErrors('Email chưa được đăng ký');
        }
    }

    public function showRecoveryPasswordForm($token)
    {
        return view('auth.resetpasswordform', ['token' => $token]);
    }

    public function submitRecoveryPasswordForm(ResetPasswordRequest $request)
    {
        $updatePassword = DB::table('password_resets')
            ->where([
                'token' => $request->token
            ])
            ->first();
        // dd($)
        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Link đã hết hạn, thử lại quên mật khẩu');
        }

        try{
            DB::beginTransaction();
            $email = $updatePassword->email;
            $user = User::where('email', $email)->update(['password' => Hash::make($request->password)]);
            DB::table('password_resets')->where(['email' => $request->email])->delete();
            DB::commit();
        } catch(\Exception $err) {
            DB::rollBack();
            return redirect()->back()->withErrors($err->getMessage());
        }

        return redirect()->route('auth.login.get')->with('success', 'Mật khẩu đã được thay đổi! Đăng nhập ngay');
    }
}
