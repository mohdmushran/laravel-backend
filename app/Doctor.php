<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable =['name', 'image', 'mobile', 'description', 'specialization', 'fees'];
}
