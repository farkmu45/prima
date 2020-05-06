<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use SoftDeletes;
    protected $guarded = ['id'];

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function addPayment($data)
    {
        $this->payments()->create($data);
    }
}
