<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_topic extends Model
{
    public function course()
    {
    	return $this->belongsTo('App\course');
    }

    public function courses()
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
