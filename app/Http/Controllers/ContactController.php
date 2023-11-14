<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    //

    public function SubmitContact(Request $request){

        //return $request->all();
        $subject="User Contact Message";
        Mail::to('info@intogore.com')
        ->send(new ContactMail($request->name,$request->email,$request->message,$subject));
        return redirect()->route('Contact')->withSuccess('Your Message is send to company email');
    }
}
