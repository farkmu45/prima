<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id')->withTrashed();
    }
}
