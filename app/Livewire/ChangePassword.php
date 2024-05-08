<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class ChangePassword extends Component
{
    public $newPassword;
    public $confirmPassword;

    public function render()
    {
        return view('livewire.change-password');
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'newPassword' => 'required',
            'confirmPassword' => 'required|same:newPassword',
        ]);
    }

    public function updatePassword()
    {
        $this->validate([
            'newPassword' => 'required',
            'confirmPassword' => 'required|same:newPassword',
        ]);
    
        // Retrieve the user ID from the session
        $userId = Session::get('uid');
    
       
        $updateuserpassword=user::where('id',$userId)->update([
            'password'=>$this->newPassword,
        ]);

        // dd($updateuserpassword);

        if($updateuserpassword==1){
            $this->newPassword = '';
            $this->confirmPassword = '';
            $this->dispatch('alert',
            title:'Password Changed Successfully..!'

            );
        }



        
    }

   
}
