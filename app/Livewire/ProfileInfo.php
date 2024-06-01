<?php

namespace App\Livewire;

use Livewire\Component;

class ProfileInfo extends Component
{

     public $user;
     public $user_details;
     public $editBasicInfo = false;
     public $firstName;
     public $lastName;
     public $gender;

    public function mount(){

        $this->user = auth()->user();
       $this->user_details = $this->user->user_detail;

    }

    public function edit_basic_info_show(){

        // dd($this->editBasicIn+fo);
        $this->editBasicInfo = true;

    }

    public function render()
    {
        return view('livewire.profile-info');
    }
}
