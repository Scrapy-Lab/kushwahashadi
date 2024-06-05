<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function user_detail()
    {

        return $this->hasOne(UserDetail::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            // Generate member_id

            // dd($user);
            // $latestUserDetail = UserDetail::orderBy('created_at', 'desc')->first();
            // $number = $latestUserDetail ? intval(substr($latestUserDetail->member_id, -7)) + 1 : 1;
            // $memberId = 'KUSHSHADI' . str_pad($number, 7, '0', STR_PAD_LEFT);

            // // Create user_details record
            // $user->user_detail()->create([
            //     'member_id' => $memberId,
            //     // other fields if needed
            // ]);
        });
    }
}
