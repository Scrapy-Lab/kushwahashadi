<?php

namespace App\Livewire;

use Livewire\Component;

class UserDashboard extends Component
{
    public $showProfile = false;
    public $showShortlist = false;


    public function show_profile()
    {

        $this->showProfile = true;
    }

    public function show_shortlist()
    {
// dd('aasdasdsas');
        $this->showShortlist = true;
    }

    public function render()
    {
        return view('livewire.user-dashboard');
    }
}
