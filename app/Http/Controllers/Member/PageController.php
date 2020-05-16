<?php

namespace App\Http\Controllers\Member;

use App\Enrolled_student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    //Save student Function
    public function enrolstudent(Request $request)
    {
        // Validation
        $this->validate($request, [
            'user_id' => 'required',
            'department_id' => 'required',
        ]);

        // Save Record into Enrolled Student DB
        $enrollstudent = new Enrolled_student();
        $enrollstudent->user_id = $request->input('user_id');
        $enrollstudent->department_id = $request->input('department_id');
        $enrollstudent->status = 1;
        if (Enrolled_student::where('user_id', '=', $enrollstudent->user_id)->exists()) {
            return redirect()->back()->with('warning_message', 'member Already Exist and cant be re-added');
        } else {

            $enrollstudent->save();

            \Session::flash('Success_message', '✔ member Successfully Added.');

            return redirect()->route('adminmember');
        }
    }

    // Update enrolled Student function
    public function updatemember(Request $request, $id)
    {
        $enrollstudent = Enrolled_student::find($id);
        // Validation
        $this->validate($request, array(
            'user_id' => 'required',
            'department_id' => 'required',
        ));

        $enrollstudent = Enrolled_student::find($id);

        $enrollstudent->user_id = $request->input('user_id');

        $enrollstudent->department_id = $request->input('department_id');

        $enrollstudent->save();

        \Session::flash('Success_message', '✔ Record Updated Succeffully');

        return back();
    }

    public function deletemember($id)
    {
        // Delete Enrolled Student
        $enrollstudent = Enrolled_student::where('id', $id)->first();
        $enrollstudent->delete();

        \Session::flash('Success_message', 'You Have Successfully Deleted member');

        return back();
    }
}
