<?php

namespace App\Http\Controllers\Course;

use App\Course;
use App\Course_assignment;
use App\Course_topic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    //Save Course Function
    public function savecourse(Request $request)
    {
        // Validation
        $this->validate($request, [
            'department_id' => 'required',
            'title' => 'required',
            'code' => 'required',
            'unit' => 'required',
        ]);

        // Save Record into class DB
        $course = new Course();
        $course->department_id = $request->input('department_id');
        $course->title = $request->input('title');
        $course->code = $request->input('code');
        $course->unit = $request->input('unit');
        $course->status = 1;

        if (Course::where('title', '=', $course->title)->exists()) {
            return redirect()->back()->with('warning_message', 'Course Already Exist and cant be re-added');
        } else {

            $course->save();

            \Session::flash('Success_message', '✔ Course Successfully Added.');

            return redirect()->route('admincourse');
        }
    }

    // Update Course function
    public function updatecourse(Request $request, $id)
    {
        $course = Course::find($id);
        // Validation
        $this->validate($request, array(
            'department_id' => 'required',
            'title' => 'required',
        ));

        $course = Course::find($id);

        $course->department_id = $request->input('department_id');

        $course->title = $request->input('title');

        $course->save();

        \Session::flash('Success_message', '✔ Record Updated Succeffully');

        return back();
    }

    public function deletecourse($id)
    {
        // Delete Course
        $course = Course::where('id', $id)->first();
        $course->delete();

        \Session::flash('Success_message', 'You Have Successfully Deleted Course');

        return back();
    }

    //Save Course Topic Function
    public function savecoursetopic(Request $request)
    {
        // Validation
        $this->validate($request, [
            'course_id' => 'required',
            'title' => 'required',
            'abstract' => 'required',
            'content' => 'required',
        ]);

        // Save Record into class topic DB
        $coursetopic = new Course_topic();
        $coursetopic->course_id = $request->input('course_id');
        $coursetopic->title = $request->input('title');
        $coursetopic->abstract = $request->input('abstract');
        // save image 
        if ($request->hasFile('content')) {
            $content = $request->file('content');
            $filename = time() . '.' . $content->getClientOriginalExtension();
            $destination = public_path('upload/coursetopic/');
            $content->move($destination, $filename);

            $coursetopic->content = $filename;
        }

        if (Course_topic::where('title', '=', $coursetopic->title)->exists()) {
            return redirect()->back()->with('warning_message', 'Course Topic Already Exist and cant be re-added');
        } else {

            $coursetopic->save();

            \Session::flash('Success_message', '✔ Course Successfully Added.');

            return redirect()->route('admincoursetopic');
        }
    }

    //Save Course Assignment Function
    public function saveassignment(Request $request)
    {
        // Validation
        $this->validate($request, [
            'course_id' => 'required',
            'course_topic_id' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        // Save Record into Course Assignment DB
        $courseassigment = new Course_assignment();
        $courseassigment->course_id = $request->input('course_id');
        $courseassigment->course_topic_id = $request->input('course_topic_id');
        $courseassigment->title = $request->input('title');
        $courseassigment->instruction = $request->input('instruction');
        $courseassigment->content = $request->input('content');
        // save Assignment Attachment
        if ($request->hasFile('attach')) {
            $attach = $request->file('attach');
            $filename = time() . '.' . $attach->getClientOriginalExtension();
            $destination = public_path('upload/courseassigment/');
            $attach->move($destination, $filename);

            $courseassigment->attach = $filename;
        }
        $courseassigment->status = 1;
        if (Course_assignment::where('title', '=', $courseassigment->title)->exists()) {
            return redirect()->back()->with('warning_message', 'Course Assignment Already Exist and cant be re-added');
        } else {

            $courseassigment->save();

            \Session::flash('Success_message', '✔ Assignment Successfully Added.');

            return redirect()->route('admincourseassignment');
        }
    }
}
