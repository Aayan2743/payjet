<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;


class Loginuser extends Component
{

    public $email; 
    public $password; 
   
    public function Logincheck(){
        $this->validate([
            'email'=>'required',
            'password'=>'required',

        ],[
            'email.required'=>'Email id / Mobile Number Required...!',
            'password.required'=>'Password Required...!',
        ]);

     

        $checklogin=User::where('email',$this->email)->orWhere('mobile',$this->email)->where('password',$this->password)->get();
        
        if(count($checklogin)>0){
           
            session()->put('uid', $checklogin[0]->id);
            session()->put('name', $checklogin[0]->name);
            session()->put('email', $checklogin[0]->email);
            session()->put('mobile', $checklogin[0]->mobile);
            session()->put('cname', $checklogin[0]->Companyname);
            session()->put('role', $checklogin[0]->role);
            
            return redirect()->route('superadmin.home');
           
        }else{
            session()->flash('error','Invalid Credentials....!');
        }

    }    

    public function render()
    {
        return view('livewire.loginuser');
    }
}
