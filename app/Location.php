<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  public function categories()
  {
    belongsToMany('\App\Location');
  }
  protected $fillable = [
    'name', 'is_airport', 'created_at', 'updated_at'
  ];
}
