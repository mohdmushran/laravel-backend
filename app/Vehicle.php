<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['vehicle_name', 'description', 'year', 'make', 'model', 'country', 'state', 'city'];
}
