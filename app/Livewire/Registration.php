<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\UserDetail;
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
    public $createUserDetail;

    public function mount(){
        $this->createUser = new User();
        $this->createUserDetail = new UserDetail();
    }

    public function render()
    {
        return view('livewire.registration');
    }

    public function registerNow()
    {
        try{
            $this->createUser->name = $this->name;
            $this->createUser->last_name = $this->user_surname;
            $this->createUserDetail->on_behalf = $this->on_behalf;
            $this->createUserDetail->gender = $this->gender;
            $this->createUserDetail->dob = $this->dob;
            $this->createUserDetail->phone = $this->phone;
            $this->createUserDetail->degree = $this->degree;
            $this->createUserDetail->address = $this->address;
            $this->createUserDetail->height = $this->height;
            // $this->createUserDetail->profession = $this->profession;
            // $this->createUserDetail->sibling_name = $this->sibling_name;
            $this->createUser->email = $this->email;
            $this->createUser->password = Hash::make($this->password);
            $this->createUser->save();
            $this->createUserDetail->user_id = $this->createUser->id;
            $this->createUserDetail->save();

        return redirect(route('dashboard'));
        } catch (\Exception $e){
            dd($e->getMessage());
        }
    }
}
