<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\userdetail;



class Addmarchent extends Component
{

    public $m_name;
    public $m_mobile;
    public $m_email;
    public $c_name;
    public $c_password;
    public $c_usertype;
    // public $c_usertype;


    public function addNewUser(){
        $this->validate([
            'm_name'=>'required',
            'm_mobile'=>'required|numeric|digits:10|unique:users:mobile',
            'm_email'=>'required|email|unique:users:email',
            'c_name'=>'required',
            'c_password'=>'required',
            'c_usertype'=>'required',
        ],[
            'm_name.required'=>'Name Required....!',
            'm_mobile.required'=>'Mobile Number Required....!',
            'm_mobile.numeric'=>'Mobile Number Allowed Only Digits....!',
            'm_mobile.digits'=>'Mobile Number Allowed Only 10 Digits....!',
            'm_email.required'=>'Email id Required....!',
            'm_email.email'=>'Email id Should Be in Corrrect format....!',
            'c_name.required'=>'Company Name Required....!',
            'c_password.required'=>'Company Password Required....!',
            'c_usertype.required'=>'Select User Type....!',
        ]);

        
    }


    public function Selectusertype($v){
       
       $this->c_usertype=$v;
        // dd($v);
    }

    public function render()
    {
        $alluserroles=userdetail::get();
        return view('livewire.addmarchent',compact('alluserroles'));
    }
}
