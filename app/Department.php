<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function course()
    {
    	return $this->hasMany('App\course');
    }

    public function studentprofile()
    {
    	return $this->hasMany('App\Studentprofile');
    }
    
}
