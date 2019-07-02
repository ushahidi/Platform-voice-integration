<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class IncomingMessagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @param  IncomingMessagesController  $users
     * @return void
     */
    public function incomingMessage(Request $request) {
        $message = $request->input('message');
        if(!$message) {
            
            return response("You need to add a message", 400);
        }
        else {
            $this->sendMessage($message);
        }


    }

    public function sendMessage($message) {
        // exchange below code and use Guzzle to send the message to the platform.
        // log things like this:
        Log:info(print_r($message, true));
        return response("thank you for your message!", 200);
        
    }
}