<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;
use App\Course;
use App\Course_assignment;
use App\Course_topic;
use App\Enrolled_student;
use App\Studentprofile;
use App\User;

class PageController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function dashboard()
    {
        
        $data['department'] = Department::count();
        $data['course'] = Course::count();
        $data['student'] = User::where('role_id', 3)->count();
        $data['lecturer'] = User::where('role_id', 2)->count();
        return view('admin.dashboard', $data);
    }

    public function department()
    {
        $data['department'] = Department::where('status', 1)->get();
        return view('admin.department', $data);
    }

    public function deptstudent($id)
    {
        $data['deptstudent'] = Studentprofile::where('department_id', $id)->get();
        return view('admin.deptstudent', $data);
    }

    public function course()
    {
        $data['department'] = Department::where('status', 1)->get();
        $data['course'] = Course::where('status', 1)->get();
        return view('admin.course', $data);
    }
   
    public function coursetopic()
    {
        $data['course'] = Course::where('status', 1)->get();
        $data['coursetopic'] = Course_topic::all();
        return view('admin.course_topic', $data);
    }

    public function  courseassignment()
    {
        $data['course'] = Course::where('status', 1)->get();
        $data['coursetopic'] = Course_topic::all();
        $data['courseassignment'] = Course_assignment::where('status', 1)->get();
        return view('admin.course_assignment', $data);
    }

    public function coursedetails($id)
    {
        $data['coursedetails'] = Course_topic::where('course_id', $id)->get();
        $data['course'] = Course::where('id', $id)->first();
        return view('admin.coursedetails', $data);
    }

    public function member()
    {
        $data['department'] = Department::where('status', 1)->get();
        $data['student'] = User::where('role_id', 3)->get();
        $data['member'] = Enrolled_student::all();
        return view('admin.member', $data);
    }

    public function users()
    {
        $data['users'] = User::where('role_id', '!=', 1)->get();
        return view('admin.user', $data);
    }

    public function lecturer()
    {
        $data['lecturer'] = User::where('role_id', 2)->get();
        return view('admin.lecturer', $data);
    }

    public function student()
    {
        $data['student'] = User::where('role_id', 3)->where('status', 1)->get();
        $data['department'] = Department::where('status', 1)->get();
        return view('admin.student', $data);
    }
    public function studentarchived()
    {
        $data['student'] = User::where('role_id', 3)->where('status', 0)->get();
        return view('admin.archivedstudent', $data);
    }

    public function archivestudent($id)
    {
        User::where(['id' => $id])
            ->update(array('status' => 0));

        \Session::flash('success_message', 'You have Successfully archive this student');

        return redirect()->route('adminstudent');
    }

    public function unarchivestudent($id)
    {
        User::where(['id' => $id])
            ->update(array('status' => 1));

        \Session::flash('success_message', 'You have Successfully Unarchive student');

        return redirect()->route('adminstudentarchived');
    }
}
