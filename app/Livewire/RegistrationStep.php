<?php

namespace App\Livewire;

use App\Models\BodyType;
use App\Models\Caste;
use App\Models\Complexion;
use App\Models\FamilyStatus;
use App\Models\FamilyValue;
use App\Models\HighestEducation;
use App\Models\Occupation;
use App\Models\OnBehalf;
use App\Models\Religion;
use App\Models\SubCaste;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RegistrationStep extends Component
{


    public $user;
    public $userDetail;
    public $on_behalf;
    public $highest_education;
    public $occupation;
    public $body_type;
    public $religion;
    public $complexion;
    public $caste;
    public $sub_caste;
    public $family_values;
    public $family_status;
    public $form = [];

    public function mount()
    {

        $user = auth()->user();

        $this->form = [
            'name' => $user->name,
            'email' => $user->email,
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
            'native_place' => $user->user_detail->native_place ?? '',
            'father' => $user->user_detail->father ?? '',
            'father_occupation' => $user->user_detail->father_occupation ?? '',
            'mother' => $user->user_detail->mother ?? '',
            'mother_occupation' => $user->user_detail->mother_occupation ?? '',
            'brother' => $user->user_detail->brother ?? '',
            'brother_occupation' => $user->user_detail->brother_occupation ?? '',
            'sister' => $user->user_detail->sister ?? '',
            'sister_occupation' => $user->user_detail->sister_occupation ?? '',
            'partner_exp_general_requirement' => $user->user_detail->partner_exp_general_requirement,
            'partner_exp_height' => $user->user_detail->partner_exp_height,
            'partner_exp_country_of_residence' => $user->user_detail->partner_exp_country_of_residence,
            'partner_exp_marital_status' => $user->user_detail->partner_exp_marital_status,
            'partner_exp_caste' => $user->user_detail->partner_exp_caste,
            'partner_exp_education' => $user->user_detail->partner_exp_education,
            'partner_exp_drinking_habits' => $user->user_detail->partner_exp_drinking_habits,
            'partner_exp_diet' => $user->user_detail->partner_exp_diet,
            'partner_exp_manglik' => $user->user_detail->partner_exp_manglik,
            'partner_exp_family_values' => $user->user_detail->partner_exp_family_values,
            'partner_exp_prefered_countries' => $user->user_detail->partner_exp_prefered_countries,
            'partner_exp_prefered_cities' => $user->user_detail->partner_exp_prefered_cities,
            'partner_exp_age' => $user->user_detail->partner_exp_age,
            'partner_exp_weight' => $user->user_detail->partner_exp_weight,
            'partner_exp_with_child' => $user->user_detail->partner_exp_with_child,
            'partner_exp_religion' => $user->user_detail->partner_exp_religion,
            'partner_exp_sub_caste' => $user->user_detail->partner_exp_sub_caste,
            'partner_exp_profession' => $user->user_detail->partner_exp_profession,
            'partner_exp_smoking' => $user->user_detail->partner_exp_smoking,
            'partner_exp_bodyType' => $user->user_detail->partner_exp_bodyType,
            'partner_exp_disability' => $user->user_detail->partner_exp_disability,
            'partner_exp_family_stat' => $user->user_detail->partner_exp_family_stat,
            'partner_exp_prefered_state' => $user->user_detail->partner_exp_prefered_state,
        ];


        $this->user = Auth::user();
        $this->userDetail = $user->user_detail;

        $this->on_behalf = OnBehalf::all();
        $this->highest_education = HighestEducation::all();
        $this->occupation = Occupation::all();
        $this->body_type = BodyType::all();
        $this->religion = Religion::all();
        $this->caste = Caste::all();
        $this->complexion = Complexion::all();
        $this->sub_caste = SubCaste::all();
        $this->family_values = FamilyValue::all();
        $this->family_status = FamilyStatus::all();

    }


    public function step_one()
    {




        // Update the user's information
        $this->user->name = $this->form['name'];
        $this->user->last_name = $this->form['last_name'];
        $this->userDetail->phone = $this->form['phone'];
        $this->userDetail->gender = $this->form['gender'];
        $this->userDetail->dob = $this->form['dob'];
        $this->userDetail->marital_status = $this->form['marital_status'];
        $this->userDetail->no_of_children = $this->form['no_of_children'];
        $this->userDetail->area = $this->form['area'];
        $this->userDetail->on_behalf = $this->form['on_behalf'];
        $this->userDetail->on_behalf_name = $this->form['on_behalf_name'];
        $this->userDetail->wp_no = $this->form['wp_no'];

        $this->userDetail->address = $this->form['address'];
        $this->userDetail->country = $this->form['country'];
        $this->userDetail->state = $this->form['state'];
        $this->userDetail->city = $this->form['city'];


        $this->user->push();
        $this->userDetail->push(); // Save the user and related models

        // dd("Done");
    }


    public function step_two()
    {

        $this->userDetail->degree = $this->form['degree'];
        $this->userDetail->highest_education = $this->form['highest_education'];
        $this->userDetail->occupation = $this->form['occupation'];
        $this->userDetail->edu_details = $this->form['edu_details'];
        $this->userDetail->posting_place = $this->form['posting_place'];
        $this->userDetail->annual_income = $this->form['annual_income'];
        $this->userDetail->other_occupation = $this->form['other_occupation'];

        $this->userDetail->height = $this->form['height'];
        $this->userDetail->weight = $this->form['weight'];
        $this->userDetail->complexion = $this->form['complexion'];
        $this->userDetail->blood_group = $this->form['blood_group'];
        $this->userDetail->body_type = $this->form['body_type'];
        $this->userDetail->any_disability = $this->form['any_disability'];

        $this->user->push();
        $this->userDetail->push(); // Save the user and related models
    }


    public function step_three()
    {

        $this->userDetail->religion = $this->form['religion'];
        $this->userDetail->caste = $this->form['caste'];
        $this->userDetail->sub_caste = $this->form['sub_caste'];
        $this->userDetail->gotra = $this->form['gotra'];
        $this->userDetail->family_values = $this->form['family_values'];
        $this->userDetail->family_status = $this->form['family_status'];


        $this->userDetail->sun_sign = $this->form['sun_sign'];
        $this->userDetail->moon_sign = $this->form['moon_sign'];
        $this->userDetail->birth_city = $this->form['birth_city'];
        $this->userDetail->time_of_birth = $this->form['time_of_birth'];

        $this->user->push();
        $this->userDetail->push(); // Save the user and related models
    }


    public function step_four(){


        $this->userDetail->family_residence = $this->form['family_residence'];
        $this->userDetail->native_place = $this->form['native_place'];
        $this->userDetail->father = $this->form['father'];
        $this->userDetail->father_occupation = $this->form['father_occupation'];
        $this->userDetail->mother = $this->form['mother'];
        $this->userDetail->mother_occupation = $this->form['mother_occupation'];
        $this->userDetail->brother = $this->form['brother'];
        $this->userDetail->brother_occupation = $this->form['brother_occupation'];
        $this->userDetail->sister = $this->form['sister'];
        $this->userDetail->sister_occupation = $this->form['sister_occupation'];


        $this->userDetail->partner_exp_general_requirement = $this->form['partner_exp_general_requirement'];
        $this->userDetail->partner_exp_height = $this->form['partner_exp_height'];
        $this->userDetail->partner_exp_marital_status = $this->form['partner_exp_marital_status'];
        $this->userDetail->partner_exp_caste = $this->form['partner_exp_caste'];
        $this->userDetail->partner_exp_education = $this->form['partner_exp_education'];
        $this->userDetail->partner_exp_drinking_habits = $this->form['partner_exp_drinking_habits'];
        $this->userDetail->partner_exp_diet = $this->form['partner_exp_diet'];
        $this->userDetail->partner_exp_manglik = $this->form['partner_exp_manglik'];
        $this->userDetail->partner_exp_family_values = $this->form['partner_exp_family_values'];
        $this->userDetail->partner_exp_prefered_countries = $this->form['partner_exp_prefered_countries'];
        $this->userDetail->partner_exp_prefered_cities = $this->form['partner_exp_prefered_cities'];
        $this->userDetail->partner_exp_age = $this->form['partner_exp_age'];
        $this->userDetail->partner_exp_weight = $this->form['partner_exp_weight'];
        $this->userDetail->partner_exp_with_child = $this->form['partner_exp_with_child'];
        $this->userDetail->partner_exp_religion = $this->form['partner_exp_religion'];
        $this->userDetail->partner_exp_sub_caste = $this->form['partner_exp_sub_caste'];
        $this->userDetail->partner_exp_profession = $this->form['partner_exp_profession'];
        $this->userDetail->partner_exp_smoking = $this->form['partner_exp_smoking'];
        $this->userDetail->partner_exp_bodyType = $this->form['partner_exp_bodyType'];
        $this->userDetail->partner_exp_disability = $this->form['partner_exp_disability'];
        $this->userDetail->partner_exp_family_stat = $this->form['partner_exp_family_stat'];
        $this->userDetail->partner_exp_prefered_state = $this->form['partner_exp_prefered_state'];

        $this->user->push();
        $this->userDetail->push(); // Save the user and related models


        return redirect(route('dashboard'));
    }

    public function render()
    {
        return view('livewire.registration-step');
    }
}
