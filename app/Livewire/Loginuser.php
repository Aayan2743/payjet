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
           
            $key = "a2e7f799-fdd3-4718-a6c9-52f3046fe0f7";

        
            $encodedKey = base64_encode($key);
         
            $secret_key_timestamp = (int)(round(microtime(true) * 1000));
            
         
            $signature = hash_hmac('SHA256', $secret_key_timestamp, $encodedKey, true);
            
            // Encode it using base64
            $secret_key = base64_encode($signature);
            
        
            session()->put('time_stamp', $secret_key_timestamp);
            session()->put('s_key', $secret_key);
            session()->put('d_key', '96068e12494dda59df8b55799fa519b5');
            session()->put('u_code', '35854001');
            session()->put('initiator_id', '9705708003');
          




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
