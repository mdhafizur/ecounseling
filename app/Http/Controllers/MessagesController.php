<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cmessages;

class MessagesController extends Controller
{
    public function submit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);

        //create a new maessage
        $message = new cmessages;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        //save message
        $message->save();

        //redirect

        return redirect('/')->with('success', 'Message Sent');
    }
    //view messages
    public function getMessages()
    {
        $messages = cmessages::all();
        return view('messages')->with('messages', $messages);
    }
}
