<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProfileViewedBy extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function profile()
    {
        return $this->belongsTo(User::class,'profile_id','id');
    }
}