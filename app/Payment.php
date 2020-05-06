<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{

    use SoftDeletes;


    protected $guarded = ['id'];

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id')->withTrashed();
    }
}
