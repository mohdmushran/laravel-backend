<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class search extends Model
{
//    protected $table_name = 'searching';
    protected $fillable =['name', 'address', 'phone', 'email', 'city'];
}
