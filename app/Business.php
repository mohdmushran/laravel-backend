<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = ['business_name','address','mobile_number','pin_code','gender'];
}
