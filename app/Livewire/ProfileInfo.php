<?php

namespace App\Livewire;


use App\Models\ProfileViewedBy;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfileInfo extends Component
{

    public $user;
    public $user_details;
    public $editBasicInfo = false;
    public $editAddress = false;
    public $memberId;
    public $form = [];
    public $is_view_profile = false;

    public function mount($id = null)
    {
        if ($id) {
            $this->user = User::findOrFail($id);
            $this->is_view_profile = false;
            $user = $this->user;

            $profile_viewed_by = new ProfileViewedBy();
            $profile_viewed_by->profile_id = $id;
            $profile_viewed_by->user_id = Auth::id();
            $profile_viewed_by->save();
        } else {
            $this->is_view_profile = true;
            $this->user = Auth::user();
            $user = auth()->user();
        }

        // dd($this->user, $id);
        // $this->user_details = $this->user->user_detail;
        $this->memberId = $user->member_id;
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
        $userDetail->gender = $this->form['gender'];
        $userDetail->dob = $this->form['dob'];
        $userDetail->marital_status = $this->form['marital_status'];
        $userDetail->no_of_children = $this->form['no_of_children'];
        $userDetail->area = $this->form['area'];
        $userDetail->on_behalf = $this->form['on_behalf'];
        $userDetail->on_behalf_name = $this->form['on_behalf_name'];
        $userDetail->wp_no = $this->form['wp_no'];
        $userDetail->degree = $this->form['degree'];
        $userDetail->address = $this->form['address'];
        $userDetail->country = $this->form['country'];
        $userDetail->state = $this->form['state'];
        $userDetail->city = $this->form['city'];
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
