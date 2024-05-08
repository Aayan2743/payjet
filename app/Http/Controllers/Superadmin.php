<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class Superadmin extends Controller
{
    //
    public function index(){


        return view('dashboard');
    }

    public function usermangement()
    {
        return view('usermanagement');  
    }

    public function logout(){
        session()->flush();
        return redirect()->route('login');
    }

    public function homeservices(){

        return view('home');

    }

    public function profile(){
        return view('profile');

    }
}
