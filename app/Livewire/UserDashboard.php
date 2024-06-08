<?php

namespace App\Livewire;

use App\Models\ProfileViewedBy;
use Livewire\Component;

class UserDashboard extends Component
{
    public $showProfile = false;
    public $showShortlist = false;
    public $showIntrest = false;
    public $showMesssage = false;
    public $showViewers = false;

    public $profileviewers;


    public function mount(){

        $this->profileviewers = ProfileViewedBy::where("profile_id", auth()->user()->id)->get();
    }



    public function show_profile()
    {

        $this->showProfile = true;
        $this->showShortlist = false;
        $this->showMesssage = false;
        $this->showIntrest = false;
        $this->showViewers = false;
    }

    public function show_shortlist()
    {
        $this->showShortlist = true;
        $this->showMesssage = false;
        $this->showIntrest = false;
        $this->showMesssage = false;
        $this->showViewers = false;
        $this->showProfile = false;
    }

    public function show_intrest()
    {
        $this->showIntrest = true;
        $this->showShortlist = false;
        $this->showMesssage = false;
        $this->showMesssage = false;
        $this->showViewers = false;
        $this->showProfile = false;
    }

    public function show_messsage()
    {
        $this->showMesssage = true;
        $this->showIntrest = false;
        $this->showShortlist = false;
        $this->showViewers = false;
        $this->showProfile = false;
    }
    public function show_viewers()
    {
        $this->showIntrest = false;
        $this->showShortlist = false;
        $this->showMesssage = false;
        $this->showMesssage = false;
        $this->showViewers = true;
        $this->showProfile = false;

        $this->profileviewers = ProfileViewedBy::where("profile_id", auth()->user()->id)->orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.user-dashboard');
    }
}
