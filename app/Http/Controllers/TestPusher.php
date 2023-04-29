<?php

namespace App\Http\Controllers;

use App\Events\TestPusher as EventsTestPusher;
use Illuminate\Http\Request;

class TestPusher extends Controller
{
    public function getFrontEnd()
    {
        return view('test.test1');
    }

    public function sent(Request $request)
    {
        $message = $request->query->get('message', 'Hey guys!');
        $city = $request->query->get('city', 'Hà Nội');
        event(new EventsTestPusher($message, $city));

        return "Message \" $message \" has been sent.";
    }
}
