<?php

namespace App\Livewire;

use Livewire\Component;

class ProfileInfo extends Component
{

     public $user;
     public $user_details;

    public function mount(){

        $this->user = auth()->user();
       $this->user_details = $this->user->user_detail;

    }

    public function render()
    {
        return view('livewire.profile-info');
    }
}
