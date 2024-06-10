<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfileExpectation extends Component
{
    public $user;

    public function mount()
    {
        $id = Auth::id();
        $this->user = User::find($id);
    }

    public function render()
    {
        return view('livewire.profile-expectation');
    }
}
