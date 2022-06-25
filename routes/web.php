<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\emr\AccountController;
use App\Http\Controllers\emr\AppointmentController;
use App\Http\Controllers\emr\DashboardController;
use App\Http\Controllers\emr\PatientController;
use App\Http\Controllers\emr\PermissionController;
use App\Http\Controllers\LangController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/lang/{lang}', [LangController::class, 'changeLang'])->name('lang');

/** -------Web----------- */
Route::get('/', function() {
    return view('web.home');
});
    # Load ajax time List
Route::post('/loadTimeList', function(Request $request){
    if(!empty($request->value)) {
        return true;
    } else {
        return false;
    }
});
/** --------End Web ---------*/

# Auth
Route::get('/login', [AuthController::class, 'index'])->name('auth.login.get');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout.post');

# Reset password
Route::get('/forgot-password', [ResetPasswordController::class, 'showForgetPasswordForm'])->name('auth.forgot.get');
Route::post('/forgot-password', [ResetPasswordController::class, 'submitForgetPasswordForm'])->name('auth.forgot.post');
Route::get('/recovery-password/{token}', [ResetPasswordController::class, 'showRecoveryPasswordForm'])->name('auth.recovery.get');
Route::post('/recovery-password', [ResetPasswordController::class, 'submitRecoveryPasswordForm'])->name('auth.recovery.post');

# Admin
Route::prefix('/emr')->middleware('auth')->group(function(){

    Route::get('/', [DashboardController::class, 'index'])->name('emr.dashboard');
    # Route patients
    Route::prefix('/patient')->controller(PatientController::class)->group(function(){
        Route::get('/', 'index')->name('patient.index');
        Route::get('/add', 'create')->name('patient.create');
        Route::post('/add', 'store')->name('patient.store');
        Route::get('/edit/{id}', 'edit')->name('patient.edit');
        Route::post('/{id}', 'update')->name('patient.update');
        Route::get('/loadDistrict', 'loadDistrict');
        Route::get('/loadWard', 'loadWard');
        Route::get('/loadPatientName', 'loadPatientName');
        Route::delete('/destroy', 'destroy');
    });
    

    # Route Account
    Route::prefix('/account')->controller(AccountController::class)->group(function(){
        Route::get('/', 'index')->name('account.index');
        Route::get('/add', 'create')->name('account.create');
        Route::post('/add', 'store')->name('account.store');
        Route::get('/{id}/edit', 'edit')->name('account.edit');
        Route::put('/{id}', 'update')->name('account.update');
        Route::delete('/destroy', 'destroy');
    });

    # Route Permission
    Route::prefix('/permission')->controller(PermissionController::class)->group(function(){
        Route::get('/', 'index')->name('permission.index');
        Route::get('/add', 'create')->name('permission.create');
        Route::post('/add', 'store')->name('permission.store');
        Route::get('/{id}/edit', 'edit')->name('permission.edit');
        Route::get('/{id}', 'show')->name('permission.show');
        Route::put('/{id}', 'update')->name('permission.update');
        Route::delete('/destroy', 'destroy');
    });

    # Route Appointments
    Route::prefix('/appointment')->controller(AppointmentController::class)->group(function(){
        Route::get('/', 'showPatientAccepted')->name('appointment.showPatientAccepted');
        // Route::get('/{id}', 'show')->name('appointment.show');
        Route::get('/pending', 'showPatientPending')->name('appointment.showPatientPending');
        Route::post('/add', 'store')->name('appointment.store');
    });
});
# Route Appointments Patient side
Route::prefix('/appointmentPatient')->group(function(){
    Route::get('/', [AppointmentController::class, 'index'])->name('appointmentPatient.index');
    Route::get('/add/{token}', [AppointmentController::class, 'appointmentProcess'])->name('appointmentPatient.verified.get');
    // Route::put('/add/{token}', [AppointmentController::class, 'emailVerified'])->name('appointmentPatient.verified.post');
    Route::post('/add', [AppointmentController::class, 'store'])->name('appointmentPatient.store');
});
