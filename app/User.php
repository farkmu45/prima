<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $guarded = ['id'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function refer()
    {
        return $this->hasOne(Referral::class, 'user_id');
    }

    public function referrals()
    {
        return $this->hasMany(Referral::class, 'referrer_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function orders()
    {
        return $this->hasMany(UserOrder::class);
    }

    public function isAdmin()
    {
        return $this->role_id == 1;
    }

    public function cashout()
    {
        return $this->hasMany(Cashout::class);
    }

    public function hasVerifiedPhone()
    {
        return (bool) $this->verified;
    }

    public function markPhoneAsVerified()
    {
        return $this->forceFill([
            'verified' => true,
        ])->save();
    }
}
