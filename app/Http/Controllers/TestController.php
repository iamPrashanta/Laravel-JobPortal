<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
        return "Hello";
    }

    public function getDbData(){
        return "yes";
    }
}