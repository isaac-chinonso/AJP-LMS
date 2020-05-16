<?php

namespace App\Http\Controllers\Department;

use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    //Save department Function
    public function savedepartment(Request $request)
    {
        // Validation
        $this->validate($request, [
            'title' => 'required',
        ]);

        // Save Record into department DB
        $department = new Department();
        $department->title = $request->input('title');
        $department->status = 1;

        if (Department::where('title', '=', $department->title)->exists()) {
            return redirect()->back()->with('warning_message', 'Department Already Exist and cant be re-added');
        } else {

        $department->save();

        \Session::flash('Success_message', '✔ Department Successfully Added.');

            return redirect()->route('admindepartment');
        }
    }

     // Update Class function
     public function updatedepartment(Request $request, $id)
     {
             $department = Department::find($id);
             // Validation
                $this->validate($request, array(
                   'title' => 'required',
                )); 
 
             $department = Department::find($id);  
 
             $department->title = $request->input('title');

             $department->save();
                 
         \Session::flash('Success_message','✔ Record Updated Succeffully');
 
          return back();
     }

     public function deletedepartment($id)
    {
        // Delete Department
        $department = Department::where('id',$id)->first();
        $department->delete();
        
        \Session::flash('Success_message','You Have Successfully Deleted Department');

         return back();
    }
}
