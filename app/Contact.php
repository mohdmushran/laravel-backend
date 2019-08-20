<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Contact extends Model {
        
        protected $fillable = ['fname', 'address', 'email', 'phone', 'message'];
        
    }
    