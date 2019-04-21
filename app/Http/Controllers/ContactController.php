<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    function sendMail(Request $request) {


        //sends to site owner
        \Mail::send('emails.contact',
            array(
                //'name' => response()->json([$request->get('name')]),
                'name' => $request['name'],
                'email' => $request['email'],
                'comments' => $request['comments']
            ), function($message)
            {
                $message->from('resume@ThisDudeCodes.com', 'ThisDudeCodes.com');
                $message->to('snyder.chris.m@gmail.com', 'ThisDudeCodes.com')->subject('Resume ThisDudeCodes Contact Received!');


            });

        return response()->json([$request->all()]);
    }

}
