<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Message;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function message(Request $request)
    {
        $userType = Auth::user()->id;
        $username = Auth::user()->name;
        $message = $request->message;
        event(new Message($userType, $username, $message));

        response()->json(['data'=> "Message Sent Successfully!"]);
    }

}
