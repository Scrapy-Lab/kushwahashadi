<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [] ;


    public function user(){

        return $this->belongsTo(User::class);
    }

    public function get_on_behalf()
    {
        return $this->belongsTo(OnBehalf::class);
    }

    public function get_blood_group()
    {
        return $this->belongsTo(BloodGroup::class);
    }
    public function get_body_type()
    {
        return $this->belongsTo(BodyType::class);
    }
    public function get_caste()
    {
        return $this->belongsTo(Caste::class);
    }
    public function get_city()
    {
        return $this->belongsTo(City::class);
    }
    public function get_complexion()
    {
        return $this->belongsTo(Complexion::class);
    }


    public function get_country()
    {
        return $this->belongsTo(Country::class);
    }
    public function get_district()
    {
        return $this->belongsTo(District::class);
    }
    public function get_employed_in()
    {
        return $this->belongsTo(EmployedIn::class);
    }
    public function get_family_status()
    {
        return $this->belongsTo(FamilyStatus::class);
    }
    public function get_family_value()
    {
        return $this->belongsTo(FamilyValue::class);
    }

    public function get_highest_education()
    {
        return $this->belongsTo(HighestEducation::class);
    }
    public function get_nakshatra()
    {
        return $this->belongsTo(Nakshatra::class);
    }
    public function get_occupation()
    {
        return $this->belongsTo(Occupation::class);
    }
    public function get_religion()
    {
        return $this->belongsTo(Religion::class,'religion');
    }
    public function get_special_case()
    {
        return $this->belongsTo(SpecialCase::class);
    }
    public function get_zodiac_sign()
    {
        return $this->belongsTo(ZodiacSign::class);
    }

}
