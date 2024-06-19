<?php

namespace App\Livewire;

use App\Models\Packages;
use App\Models\UserPackage;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Plans extends Component
{
    public $packages;

    public function mount()
    {
        $this->packages = Packages::all();
        // dd($this->packages);
    }

    public function addPackage($id)
    {
        // dd($id);
        $user_id = Auth::id();

        $user_package = new UserPackage();
        $user_package->user_id = $user_id;
        $user_package->package_id = $id;
        $user_package->save();
    }

    public function render()
    {
        return view('livewire.plans');
    }
}
