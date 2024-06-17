<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];


    public function user()
    {

        return $this->belongsTo(User::class);
    }

    public function get_on_behalf()
    {
        return $this->belongsTo(OnBehalf::class,'on_behalf');
    }

    public function get_blood_group()
    {
        return $this->belongsTo(BloodGroup::class,'blood_group');
    }
    public function get_body_type()
    {
        return $this->belongsTo(BodyType::class,'body_type');
    }
    public function get_caste()
    {
        return $this->belongsTo(Caste::class,'caste');
    }
    public function get_city()
    {
        return $this->belongsTo(City::class,'city');
    }
    public function get_complexion()
    {
        return $this->belongsTo(Complexion::class,'complexion');
    }


    public function get_country()
    {
        return $this->belongsTo(Country::class,'country');
    }
    public function get_district()
    {
        return $this->belongsTo(District::class,'district');
    }
    public function get_employed_in()
    {
        return $this->belongsTo(EmployedIn::class,'employed_in');
    }
    public function get_family_status()
    {
        return $this->belongsTo(FamilyStatus::class,'family_status');
    }
    public function get_family_value()
    {
        return $this->belongsTo(FamilyValue::class,'family_value');
    }

    public function get_highest_education()
    {
        return $this->belongsTo(HighestEducation::class,'highest_education');
    }
    public function get_nakshatra()
    {
        return $this->belongsTo(Nakshatra::class,'nakshatra');
    }
    public function get_occupation()
    {
        return $this->belongsTo(Occupation::class,'occupation');
    }
    public function get_religion()
    {
        return $this->belongsTo(Religion::class, 'religion');
    }
    public function get_special_case()
    {
        return $this->belongsTo(SpecialCase::class,'special_case');
    }
    public function get_zodiac_sign()
    {
        return $this->belongsTo(ZodiacSign::class,'zodiac_sign');
    }
}
