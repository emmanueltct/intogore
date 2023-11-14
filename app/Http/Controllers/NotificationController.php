<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\userNotification;
use Notification;
class NotificationController extends Controller
{
    //
    public function index(){
        $user=User::first();
        $offeredText=[
            'name'=>'Emmanuel MUNEZERO',
            'body'=>'you have successfull registered',
            'thanks'=>'Thank you.',
            'offerText'=>'you offered some special',
            'offerUrl'=>url('/'),
            'offerId'=>rand(1111,9999),
        ];
        Notification::route('mail','emmanuelmun@gmail.com')->notify(new userNotification($offeredText));
        dd('task completed');
    }
    
}
