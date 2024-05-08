<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Registration extends Component
{
    public $on_behalf;
    public $name;
    public $user_surname;
    public $gender;
    public $dob;
    public $phone;
    public $degree;
    public $address;
    public $height;
    public $profession;
    public $email;
    public $sibling_name;
    public $password;
    public $confirm_password;
    public $terms_condition;
    public $createUser;

    public function mount(){
        $this->createUser = new User();
    }

    public function render()
    {
        return view('livewire.registration');
    }

    public function registerNow()
    {
        try{
            $this->createUser->name = $this->name;
            $this->createUser->user_surname = $this->user_surname;
            $this->createUser->on_behalf = $this->on_behalf;
            $this->createUser->gender = $this->gender;
            $this->createUser->dob = $this->dob;
            $this->createUser->phone = $this->phone;
            $this->createUser->degree = $this->degree;
            $this->createUser->address = $this->address;
            $this->createUser->height = $this->height;
            $this->createUser->profession = $this->profession;
            $this->createUser->sibling_name = $this->sibling_name;
            $this->createUser->email = $this->email;
            $this->createUser->password = Hash::make($this->password);
            $this->createUser->save();
        } catch (\Exception $e){
            dd($e->getMessage());
        }
    }
}
