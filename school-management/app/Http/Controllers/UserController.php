<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_function(){
        return view('userview');
    }

    public function new(){
        return view('views.sampleform');
    }
}
