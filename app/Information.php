<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable = ['name', 'gender', 'dob', 'country', 'state', 'city'];
    protected $table = 'informations';
}
