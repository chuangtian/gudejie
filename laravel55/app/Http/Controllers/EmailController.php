<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Activate;

class EmailController extends Controller
{
    public function sendEmail(Request $request){
        $email_data = new \stdClass();
        $email_data->name = $request->name;
        $email_data->phone = $request->phone;
        $email_data->email = $request->email;
        $email_data->company =$request->company;
        $email_data->url = $request->url;
        $email_data->ad = $request->ad;
        $email_data->massage =$request->massage;
        $email_data->email_subject = '询问';
        $email_data->email_view = 'emails.deposit';
        Mail::to('tianchuang11@163.com')->send(new Activate($email_data));
    }
}
