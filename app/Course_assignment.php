<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_assignment extends Model
{
    public function course()
    {
    	return $this->belongsTo('App\Course');
    }
    public function coursetopic()
    {
    	return $this->belongsTo('App\Course_topic','id');
    }
}
