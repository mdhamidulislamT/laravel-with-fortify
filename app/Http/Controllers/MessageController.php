<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Message;
use App\Models\Message as ModelsMessage;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function message(Request $request)
    {
        $data = $request->all();
        $userType = Auth::user()->id;
        $data['user_id'] = $userType;
        $result = ModelsMessage::create($data);
        $success = '';
        
        if ($result) {
            $username = Auth::user()->name;
            $message = $request->message;
            event(new Message($userType, $username, $message));
            $success = ['data' => "Message Sent Successfully!"];
        } else {
            $success = ['data' => "Message Not Sent!"];
        }

        response()->json($success);
    }
}
