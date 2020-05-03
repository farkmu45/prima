<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    protected $guarded = ['id'];

    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
