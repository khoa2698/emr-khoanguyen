<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\TestNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class TestEnrollmentController extends Controller
{
    public function sendTestNotification()
    {
        $user = User::where('email', 'khoa.nv99vp@gmail.com')->first();
        $enrollmentData = [
            'body' => 'You received a new test notification',
            'enrollmentText' => 'You are allowed to enroll',
            'url' => url('/'),
            'thankyou' => 'Thank you',
        ];
        // $user->notify(new TestNotification($enrollmentData));
        Notification::send($user, new TestNotification($enrollmentData));
        return 'Notification is send!!';
    }
}
