<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signout extends Controller
{
    //
    public function logout()
    {
        // Remove specific session data
        

        // Or flush all session data
         Session()->flush();

        // Redirect to sign-in page or any other page
        return redirect()->route('login');
    }
}
