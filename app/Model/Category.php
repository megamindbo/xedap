<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [

    ];

    public function category()
    {
        return  $this->belongsTo('App\Model\Category');
    }
}
