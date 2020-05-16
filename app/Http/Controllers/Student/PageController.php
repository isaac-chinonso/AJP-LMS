<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('student.index');
    }

    public function dashboard()
    {
        return view('student.dashboard');
    }
}
