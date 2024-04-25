<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class TestEmail extends Controller
{
    public function mailtest(){
        Mail::to('nvpnvhnzgtujxiceve@cazlp.com')->send(new WelcomeMail());
    }
}
