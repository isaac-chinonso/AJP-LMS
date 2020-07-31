<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Course;
use App\Course_topic;
use App\Studentprofile;

class PageController extends Controller
{
    public function index()
    {
        
        return view('student.index');
    }

    public function dashboard()
    {
        $user = Auth::user();
        $data['profile'] = Studentprofile::where('user_id', $user->id)->first();
        $data['course'] = Course::where('department_id', $data['profile']->department_id)->where('unit', $data['profile']->entry_year )->count();
        return view('student.dashboard', $data);
    }

    public function biodata()
    {
        $user = Auth::user();
        $data['profile'] = Studentprofile::where('user_id', $user->id)->first();
        return view('student.biodata', $data);
    }

    public function courses()
    {
        $user = Auth::user();
        $data['profile'] = Studentprofile::where('user_id', $user->id)->first();
        $data['course'] = Course::where('department_id', $data['profile']->department_id)->where('unit', $data['profile']->entry_year )->get();
        return view('student.course', $data);
    }

    public function topics($id)
    {
        $data['coursetopic'] = Course_topic::where('course_id', $id)->get();
        return view('student.topic', $data);
    }

    public function announcement()
    {
        return view('student.announcement');
    }
}
