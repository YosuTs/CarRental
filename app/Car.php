<?php

namespace App;
##git test
##git branch test -- Crazy experiment
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
      'brand', 'model', 'year', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo('App/Category');
    }
}
