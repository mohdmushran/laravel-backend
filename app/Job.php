<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['job_title' , 'job_description' , 'salary_minimum' , 'salary_maximum' , 'job_location' , 'job_category' , 'joining_date'];
}
