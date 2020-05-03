<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
