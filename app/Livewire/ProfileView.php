<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class ProfileView extends Component
{

    public $sname; 
    public $cname; 
    public $dob; 
    public $address; 
    public $State; 
    public $City; 
    public $zipcode; 
    public $email; 
    public $mob; 
    public $wmob; 
    public $Aadhar; 
    public $pan; 
    public $uid; 



    public function getdata($id){

        $this->uid;  
        $getdetails=user::where('id',$id)->get();

        $this->sname=$getdetails[0]->Companyname;       
        $this->cname=$getdetails[0]->name;       
        $this->dob=$getdetails[0]->dob;       
        $this->address=$getdetails[0]->address;       
        $this->State=$getdetails[0]->state;       
        $this->City=$getdetails[0]->city;       
        $this->zipcode=$getdetails[0]->zipcode;       
        $this->email=$getdetails[0]->email;       
        $this->mob=$getdetails[0]->mobile;       
        $this->wmob=$getdetails[0]->altmobile;       
        $this->Aadhar=$getdetails[0]->aadheer;       
        $this->pan=$getdetails[0]->pan;       
    }


    public function update(){

        $updateuser=user::where('id',$this->uid)->update([
            'name'=> $this->sname,
            'Companyname'=> $this->cname,
            'email'=> $this->email,
            'mobile'=> $this->mob,
            'altmobile'=> $this->wmob,
            // 'password'=> $this->sname,
            // 'so'=> $this->sname,
            'pan'=> $this->pan,
            'aadheer'=> $this->Aadhar,
            'dob'=> $this->dob,
            'address'=> $this->address,
            'state'=> $this->State,
            'city'=> $this->City,
            'zipcode'=> $this->zipcode,
        ]);

        $this->dispatch('alert',

       
         icon: "success",
        // icon: data.icon,
        title: "User Details Updated Successfully...!",

        
        );



    }
    public function render()
    {
        $getuserdetails=User::where('id',session()->get('uid'))->get();

        return view('livewire.profile-view',compact('getuserdetails'));
    }
}
