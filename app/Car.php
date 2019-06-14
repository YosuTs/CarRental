<?php

namespace App;
##git test
<<<<<<< HEAD
##master commit
=======
##git branch test -- Crazy experiment
>>>>>>> crazy-experiment
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
