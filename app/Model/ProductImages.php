<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    protected $fillable = [
        'image','product_id'
    ];

    public function productimage()
    {
        $this->belongsTo('App\Product');
    }
}
