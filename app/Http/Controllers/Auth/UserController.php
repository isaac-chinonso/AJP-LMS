<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Staffprofile;
use App\Studentprofile;

class UserController extends Controller
{
    //Login Function
    public function adminlogin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'username'    => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->all());
        }

        if (Auth::attempt(['username' => $request['username'], 'password' => $request['password'], 'role_id' => '1'])) {

            return redirect()->intended(route('admindashboard'));
        }


        if (Auth::attempt(['username' => $request['username'], 'password' => $request['password'], 'role_id' => '3'])) {

            return redirect()->intended(route('studentdashboard'));
        }


        \Session::flash('warning_message', 'These credentials do not match our records.');

        return redirect()->back();
    }

    //Save student Function
    public function savestudent(Request $request)
    {
        // Validation
        $this->validate($request, [
            'username' => 'required',
        ]);

        $user = Auth::user();
        // Save Record into user DB
        $user = new User();
        $user->username = $request->input('username');
        $user->password = bcrypt(12345);
        $user->role_id = 3;
        $user->activated = 0;
        $user->status = 1;

        if (User::where('username', '=', $user->username)->exists()) {
            return redirect()->back()->with('warning_message', 'user already exist and cant be added');
        } else {
            $user->save();
            // Save Record into profile DB
            $studentprofile = new Studentprofile();
            $studentprofile->user_id = $user->id;
            $studentprofile->fullname = $request->input('fullname');
            $studentprofile->department_id = $request->input('department_id');
            $studentprofile->entry_year = $request->input('entry_year');
            $studentprofile->save();
        }
        \Session::flash('Success_message', 'You Have Successfully Registered');

        return redirect()->route('adminstudent');
    }

    public function activatestudent($id)
    {
        User::where(['id' => $id])
            ->update(array('activated' => 1));

        \Session::flash('success_message', 'Activation Successfully');

        return redirect()->route('adminstudent');
    }

    public function deactivatestudent($id)
    {
        User::where(['id' => $id])
            ->update(array('activated' => 0));

        \Session::flash('success_message', 'Deactivation Successfully');

        return redirect()->route('adminstudent');
    }


    // Logout Function
    public function logout()
    {
        $user = Auth::user();

        Auth::logout();
        return redirect()->route('login');
    }
}
