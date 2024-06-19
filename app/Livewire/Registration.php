<?php

namespace App\Livewire;

use App\Models\HighestEducation;
use App\Models\OnBehalf;
use Livewire\Component;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Auth;
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
    public $occupation;
    public $email;
    public $sibling_name;
    public $password;
    public $confirm_password;
    public $terms_condition;
    public $createUser;
    public $createUserDetail;


    public $on_behalf_select;
    public $highest_education_select;

    public function mount()
    {
        $this->createUser = new User();
        $this->createUserDetail = new UserDetail();
        $this->on_behalf_select = OnBehalf::all();
        $this->highest_education_select = HighestEducation::all();
    }

    public function render()
    {
        return view('livewire.registration');
    }

    public function registerNow()
    {

        $latestUserDetail = UserDetail::orderBy('created_at', 'desc')->first();
        // $number = $latestUserDetail ? intval(substr($latestUserDetail->member_id, -7)) + 1 : 1;
        // $memberId = 'KUSHSHADI' . str_pad($number, 7, '0', STR_PAD_LEFT);

        // $text = $latestUserDetail->id+1;
        // $fullHash = md5($text); // Generate an MD5 hash
        // $truncatedHash = substr($fullHash, 0, 12); // Truncate to 12 characters

        // Step 1: Retrieve the latest user ID and increment it
        $latestUserDetail = User::latest('id')->first(); // Assuming you're using Eloquent ORM
        $nextId = $latestUserDetail->id + 1;

        // Step 2: Generate the MD5 hash of the incremented ID
        $fullHash = md5($nextId); // Generate an MD5 hash

        // Step 3: Truncate the MD5 hash to the first 6 characters
        $truncatedHash = substr($fullHash, 0, 6); // Truncate to 6 characters

        // Step 4: Zero-pad the incremented ID to ensure it's always 5 digits
        $paddedId = str_pad($nextId, 5, '0', STR_PAD_LEFT); // Pad with zeros to 5 digits

        // Combine the hash and the padded ID
        $userIdHash = $truncatedHash . $paddedId;

        // echo $userIdHash; // Output the final user ID hash
        // dd( $userIdHash);
        try {
            $this->createUser->name = $this->name;
            $this->createUser->last_name = $this->user_surname;
            $this->createUserDetail->member_id = $userIdHash;
            $this->createUserDetail->on_behalf = $this->on_behalf;
            $this->createUserDetail->gender = $this->gender;
            $this->createUserDetail->dob = $this->dob;
            $this->createUserDetail->phone = $this->phone;
            $this->createUserDetail->degree = $this->degree;
            $this->createUserDetail->address = $this->address;
            $this->createUserDetail->height = $this->height;
            $this->createUserDetail->occupation = $this->occupation;
            // $this->createUserDetail->sibling_name = $this->sibling_name;
            $this->createUser->email = $this->email;
            $this->createUser->password = Hash::make($this->password);
            $this->createUser->save();
            $this->createUserDetail->user_id = $this->createUser->id;
            $this->createUserDetail->save();

            $credentials = [
                'email' => $this->email,
                'password' => $this->password,
            ];

            if (Auth::attempt($credentials)) {
                return redirect()->intended('/registration-step');
            }
            // return redirect(route('dashboard'));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
