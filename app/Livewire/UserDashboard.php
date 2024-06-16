<?php

namespace App\Livewire;

use App\Models\ProfileViewedBy;
use App\Models\ShortlistedCandidate;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserDashboard extends Component
{
    public $showProfile = false;
    public $showShortlist = false;
    public $showIntrest = false;
    public $showMesssage = false;
    public $showViewers = false;

    public $profileviewers;
    public $profileviewersList;
    public $shortlistedCandidates;




    public function mount(){

        $this->profileviewers = ProfileViewedBy::all();
        $this->profileviewersList = ProfileViewedBy::where('profile_id',Auth::id())->get();
       
        // dd($this->profileviewersList);
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

        // Add Shortlist Model here to show data on line no 434  @if ($showShortlist)
        $this->shortlistedCandidates = ShortlistedCandidate::where('user_id',Auth::id())->get();
        // $this->profileviewers = ProfileViewedBy::where("profile_id", auth()->user()->id)->orderBy('created_at', 'desc')->get();
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

    public function shortlist_candidates($id)
    {
        // dd($id);
        $shortlist_candidate = new ShortlistedCandidate();
        $shortlist_candidate->profile_id = $id;
        $shortlist_candidate->user_id = Auth::id();
        $shortlist_candidate->save();
    }

    public function checkshortlist($id)
    {

    }

    public function render()
    {
        return view('livewire.user-dashboard');
    }
}
