<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

  protected $fillable = [
    'name', 'is_airport', 'created_at', 'updated_at'
  ];

  public function categories()
  {
    $this->belongsToMany('\App\Location');
  }
}
