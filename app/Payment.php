<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = ['id'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
