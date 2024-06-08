<?php

namespace App\Livewire;

use Livewire\Component;

class RegistrationStep extends Component
{


     public $user;
     public $form = [];

     public function mount(){

        $user = auth()->user();

        $this->form = [
            'name' => $user->name,
            'last_name' => $user->last_name ?? '',
            'gender' => $user->user_detail->gender ?? '',
            'dob' => $user->user_detail->dob ?? '',
            'marital_status' => $user->user_detail->marital_status ?? '',
            'no_of_children' => $user->user_detail->no_of_children ?? '',
            'area' => $user->user_detail->area ?? '',
            'on_behalf' => $user->user_detail->on_behalf ?? '',
            'on_behalf_name' => $user->user_detail->on_behalf_name ?? '',
            'phone' => $user->user_detail->phone ?? '',
            'wp_no' => $user->user_detail->wp_no ?? '',
            'degree' => $user->user_detail->degree ?? '',
            'address' => $user->user_detail->address ?? '',
            'country' => $user->user_detail->country ?? '',
            'state' => $user->user_detail->state ?? '',
            'city' => $user->user_detail->city ?? '',
            'highest_education' => $user->user_detail->highest_education ?? '',
            'occupation' => $user->user_detail->occupation ?? '',
            'edu_details' => $user->user_detail->edu_details ?? '',
            'posting_place' => $user->user_detail->posting_place ?? '',
            'annual_income' => $user->user_detail->annual_income ?? '',
            'other_occupation' => $user->user_detail->other_occupation ?? '',
            'height' => $user->user_detail->height ?? '',
            'weight' => $user->user_detail->weight ?? '',
            'complexion' => $user->user_detail->complexion ?? '',
            'blood_group' => $user->user_detail->blood_group ?? '',
            'body_type' => $user->user_detail->body_type ?? '',
            'any_disability' => $user->user_detail->any_disability ?? '',
            'religion' => $user->user_detail->religion ?? '',
            'caste' => $user->user_detail->caste ?? '',
            'sub_caste' => $user->user_detail->sub_caste ?? '',
            'gotra' => $user->user_detail->gotra ?? '',
            'family_values' => $user->user_detail->family_values ?? '',
            'family_status' => $user->user_detail->family_status ?? '',
            'sun_sign' => $user->user_detail->sun_sign ?? '',
            'moon_sign' => $user->user_detail->moon_sign ?? '',
            'birth_city' => $user->user_detail->birth_city ?? '',
            'time_of_birth' => $user->user_detail->time_of_birth ?? '',
            'family_residence' => $user->user_detail->family_residence ?? '',
            'father' => $user->user_detail->father ?? '',
            'mother' => $user->user_detail->mother ?? '',
            'brother' => $user->user_detail->brother ?? '',
            'sister' => $user->user_detail->sister ?? '',
        ];
     }


    public function step_one(){

        dd("asdasd");
        // $this->step2 = true;
        // $this->step1 = false;

    }

    public function render()
    {
        return view('livewire.registration-step');
    }
}
