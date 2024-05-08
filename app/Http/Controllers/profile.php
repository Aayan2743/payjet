<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profile extends Controller
{
    //
    public function passwordChange(){
        return view('passwordchange');
    }
}
