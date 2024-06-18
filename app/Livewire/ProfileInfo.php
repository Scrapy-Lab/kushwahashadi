<?php

namespace App\Livewire;


use App\Models\ProfileViewedBy;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

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

class ProfileInfo extends Component
{

    public $user;
    public $user_details;
    public $editBasicInfo = false;
    public $editAddress = false;
    public $editQualification = false;
    public $editIntro = false;
    public $editPhysical = false;
    public $editSpritual = false;
    public $editAstro = false;
    public $ediFamilyInfo = false;
    public $memberId;
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
    public $is_view_profile = false;

    public function mount($id = null)
    {
        if ($id) {
            $this->user = User::findOrFail($id);
            $this->is_view_profile = true;
            $user = $this->user;

            // $profile_viewed_by = new ProfileViewedBy();
            // $profile_viewed_by->profile_id = $id;
            // $profile_viewed_by->user_id = Auth::id();
            // $profile_viewed_by->save();

            $profile_id = $id; // Assuming $id is defined somewhere earlier in your code
            $user_id = Auth::id();

            // Ensure the profile_id and user_id are not the same
            if ($profile_id !== $user_id) {
                // Check if a record with the given profile_id and user_id already exists
                $profile_viewed_by = ProfileViewedBy::where('profile_id', $profile_id)
                    ->where('user_id', $user_id)
                    ->first();

                if ($profile_viewed_by) {
                    // If the record exists, update the created_at timestamp
                    $profile_viewed_by->touch();
                } else {
                    // If the record does not exist, create a new one
                    $profile_viewed_by = new ProfileViewedBy();
                    $profile_viewed_by->profile_id = $profile_id;
                    $profile_viewed_by->user_id = $user_id;
                    $profile_viewed_by->save();
                }
            }
        } else {
            $this->is_view_profile = false;
            $this->user = Auth::user();
            $user = auth()->user();
        }

        // dd($user->user_detail, $id);
        // $this->user_details = $this->user->user_detail;
        $this->memberId = $user->user_detail->member_id;
        $this->form = [
            'name' => $user->name,
            'intro' => $user->user_detail->intro,
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
        ];


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

    public function edit_basic_info_show()
    {
        // dd($this->editBasicInfo);
        if ($this->editBasicInfo) {

            $this->editBasicInfo = false;
        } else {

            $this->editBasicInfo = true;
        }
    }

    public function edit_address_show()
    {
        // dd($this->editBasicInfo);
        if ($this->editAddress) {

            $this->editAddress = false;
        } else {

            $this->editAddress = true;
        }
    }

    public function edit_qualification_show()
    {
        // dd($this->editBasicInfo);
        if ($this->editQualification) {

            $this->editQualification = false;
        } else {

            $this->editQualification = true;
        }
    }

    public function edit_Intro_show()
    {
        // dd($this->editBasicInfo);
        if ($this->editIntro) {

            $this->editIntro = false;
        } else {

            $this->editIntro = true;
        }
    }


    public function edit_physical_show()
    {
        // dd($this->editBasicInfo);
        if ($this->editPhysical) {

            $this->editPhysical = false;
        } else {

            $this->editPhysical = true;
        }
    }

    public function edit_spritual_show()
    {
        // dd($this->editBasicInfo);
        if ($this->editSpritual) {

            $this->editSpritual = false;
        } else {

            $this->editSpritual = true;
        }
    }

    public function edit_astro_show()
    {
        // dd($this->editBasicInfo);
        if ($this->editAstro) {

            $this->editAstro = false;
        } else {

            $this->editAstro = true;
        }
    }


    public function edit_family_info_show()
    {
        // dd($this->editBasicInfo);
        if ($this->ediFamilyInfo) {

            $this->ediFamilyInfo = false;
        } else {

            $this->ediFamilyInfo = true;
        }
    }


    public function update_info()
    {
        // Validate the input
        $validatedData = $this->validate([
            'form.name' => 'required|string|max:255',
            'form.last_name' => 'required|string|max:255',
            'form.gender' => 'required|string|max:10',
            // Add validation rules for other fields here
        ]);

        $user = Auth::user();
        $userDetail = $user->user_detail;

        // Update the user's information
        $this->user->name = $this->form['name'];
        $this->user->last_name = $this->form['last_name'];
        $userDetail->phone = $this->form['phone'];
        $userDetail->intro = $this->form['intro'];
        $userDetail->gender = $this->form['gender'];
        $userDetail->dob = $this->form['dob'];
        $userDetail->marital_status = $this->form['marital_status'];
        $userDetail->no_of_children = $this->form['no_of_children'];
        $userDetail->area = $this->form['area'];
        $userDetail->on_behalf = $this->form['on_behalf'];
        $userDetail->on_behalf_name = $this->form['on_behalf_name'];
        $userDetail->wp_no = $this->form['wp_no'];


        $userDetail->address = $this->form['address'];
        $userDetail->country = $this->form['country'];
        $userDetail->state = $this->form['state'];
        $userDetail->city = $this->form['city'];


        $userDetail->degree = $this->form['degree'];
        $userDetail->highest_education = $this->form['highest_education'];
        $userDetail->occupation = $this->form['occupation'];
        $userDetail->edu_details = $this->form['edu_details'];
        $userDetail->posting_place = $this->form['posting_place'];
        $userDetail->annual_income = $this->form['annual_income'];
        $userDetail->other_occupation = $this->form['other_occupation'];


        $userDetail->height = $this->form['height'];
        $userDetail->weight = $this->form['weight'];
        $userDetail->complexion = $this->form['complexion'];
        $userDetail->blood_group = $this->form['blood_group'];
        $userDetail->body_type = $this->form['body_type'];
        $userDetail->any_disability = $this->form['any_disability'];


        $userDetail->religion = $this->form['religion'];
        $userDetail->caste = $this->form['caste'];
        $userDetail->sub_caste = $this->form['sub_caste'];
        $userDetail->gotra = $this->form['gotra'];
        $userDetail->family_values = $this->form['family_values'];
        $userDetail->family_status = $this->form['family_status'];


        $userDetail->sun_sign = $this->form['sun_sign'];
        $userDetail->moon_sign = $this->form['moon_sign'];
        $userDetail->birth_city = $this->form['birth_city'];
        $userDetail->time_of_birth = $this->form['time_of_birth'];


        $userDetail->family_residence = $this->form['family_residence'];
        $userDetail->father = $this->form['father'];
        $userDetail->mother = $this->form['mother'];
        $userDetail->brother = $this->form['brother'];
        $userDetail->sister = $this->form['sister'];
        $this->user->push();
        $userDetail->push(); // Save the user and related models

        session()->flash('message', 'Data updated successfully.');


        // dd($this->form['name']);
    }


    public function render()
    {
        return view('livewire.profile-info');
    }
}
