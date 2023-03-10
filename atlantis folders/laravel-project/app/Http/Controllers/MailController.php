<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function TestMail()
    {
        $details=[
            'title'=>"Mail from the surf side",
            'body'=>"This is for the testing"
        ];
        Mail::to("swamybittu649@gmail.com")->send(new TestMail($details));
        return "Email sent";
    }
}
