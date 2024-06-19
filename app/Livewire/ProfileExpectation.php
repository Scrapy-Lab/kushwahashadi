<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfileExpectation extends Component
{
    public $user;
    public $memberId;
    public $form;
    public $editProfileExpectation = false;

    public function mount()
    {
        $id = Auth::id();
        $this->user = User::find($id);

        $this->memberId = $this->user->member_id;
        $this->form = [
            'partner_exp_general_requirement' => $this->user->user_detail->partner_exp_general_requirement,
            'partner_exp_height' => $this->user->user_detail->partner_exp_height,
            'partner_exp_country_of_residence' => $this->user->user_detail->partner_exp_country_of_residence,
            'partner_exp_marital_status' => $this->user->user_detail->partner_exp_marital_status,
            'partner_exp_caste' => $this->user->user_detail->partner_exp_caste,
            'partner_exp_education' => $this->user->user_detail->partner_exp_education,
            'partner_exp_drinking_habits' => $this->user->user_detail->partner_exp_drinking_habits,
            'partner_exp_diet' => $this->user->user_detail->partner_exp_diet,
            'partner_exp_manglik' => $this->user->user_detail->partner_exp_manglik,
            'partner_exp_family_values' => $this->user->user_detail->partner_exp_family_values,
            'partner_exp_prefered_countries' => $this->user->user_detail->partner_exp_prefered_countries,
            'partner_exp_prefered_cities' => $this->user->user_detail->partner_exp_prefered_cities,
            'partner_exp_age' => $this->user->user_detail->partner_exp_age,
            'partner_exp_weight' => $this->user->user_detail->partner_exp_weight,
            'partner_exp_with_child' => $this->user->user_detail->partner_exp_with_child,
            'partner_exp_religion' => $this->user->user_detail->partner_exp_religion,
            'partner_exp_sub_caste' => $this->user->user_detail->partner_exp_sub_caste,
            'partner_exp_profession' => $this->user->user_detail->partner_exp_profession,
            'partner_exp_smoking' => $this->user->user_detail->partner_exp_smoking,
            'partner_exp_bodyType' => $this->user->user_detail->partner_exp_bodyType,
            'partner_exp_disability' => $this->user->user_detail->partner_exp_disability,
            'partner_exp_family_stat' => $this->user->user_detail->partner_exp_family_stat,
            'partner_exp_prefered_state' => $this->user->user_detail->partner_exp_prefered_state,

        ];
    }

    public function edit_profile_expec_show()
    {
        // dd($this->editProfileExpectation);
        if ($this->editProfileExpectation) {

            $this->editProfileExpectation = false;
        } else {

            $this->editProfileExpectation = true;
        }
    }


    public function update_info()
    {

        $user = Auth::user();
        $userDetail = $user->user_detail;


        $userDetail->partner_exp_general_requirement = $this->form['partner_exp_general_requirement'];
        $userDetail->partner_exp_height = $this->form['partner_exp_height'];
        $userDetail->partner_exp_country_of_residence = $this->form['partner_exp_country_of_residence'];
        $userDetail->partner_exp_marital_status = $this->form['partner_exp_marital_status'];
        $userDetail->partner_exp_caste = $this->form['partner_exp_caste'];
        $userDetail->partner_exp_education = $this->form['partner_exp_education'];
        $userDetail->partner_exp_drinking_habits = $this->form['partner_exp_drinking_habits'];
        $userDetail->partner_exp_diet = $this->form['partner_exp_diet'];
        $userDetail->partner_exp_manglik = $this->form['partner_exp_manglik'];
        $userDetail->partner_exp_family_values = $this->form['partner_exp_family_values'];
        $userDetail->partner_exp_prefered_countries = $this->form['partner_exp_prefered_countries'];
        $userDetail->partner_exp_prefered_cities = $this->form['partner_exp_prefered_cities'];
        $userDetail->partner_exp_age = $this->form['partner_exp_age'];
        $userDetail->partner_exp_weight = $this->form['partner_exp_weight'];
        $userDetail->partner_exp_with_child = $this->form['partner_exp_with_child'];
        $userDetail->partner_exp_religion = $this->form['partner_exp_religion'];
        $userDetail->partner_exp_sub_caste = $this->form['partner_exp_sub_caste'];
        $userDetail->partner_exp_profession = $this->form['partner_exp_profession'];
        $userDetail->partner_exp_smoking = $this->form['partner_exp_smoking'];
        $userDetail->partner_exp_bodyType = $this->form['partner_exp_bodyType'];
        $userDetail->partner_exp_disability = $this->form['partner_exp_disability'];
        $userDetail->partner_exp_family_stat = $this->form['partner_exp_family_stat'];
        $userDetail->partner_exp_prefered_state = $this->form['partner_exp_prefered_state'];
        $userDetail->push(); // Save the user and related models

        session()->flash('message', 'Data updated successfully.');

    }


    public function render()
    {
        return view('livewire.profile-expectation');
    }
}
