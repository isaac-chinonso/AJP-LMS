<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function department()
    {
    	return $this->belongsTo('App\Department');
    }

    public function coursetopic()
    {
    	return $this->hasMany('App\Course_topic');
    }

    public function courseassignment()
    {
    	return $this->hasMany('App\Course_assignment');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ],
        ];
    }
}
