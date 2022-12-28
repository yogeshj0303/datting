<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class StaffLoginController extends Controller
{

    function index()
    {
        $total = User::count();
        return view('Admin.dashbord', compact('total'));
    }

    function login()
    {
        return view('stafflogin');
    }

    function setLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required | max : 10 ',
        ]);
     
        $data = Staff::where('email', $request->email)->first();
    //   echo "<pre>";
    //   print_r($data);
    //   die;
     
        if ($data) {
            if (!Hash::check($request->input('password'), $data->password)) {
                return redirect('staff-log')->with('error', 'Password not matched');
            } else {
                 $request->session()->put('stafflogin', true);
               $request->session()->put('loginid', $data->id);
                 $request->session()->put('loginRole', $data->role_id);
                 $request->session()->put('loginName', $data->name);
                  $request->session()->put('loginEmail', $data->email);
                   $request->session()->put('loginMobile', $data->mobile);
                    $request->session()->put('loginDOB', $data->dob);
                     $request->session()->put('loginAdd', $data->address);
                return redirect('/dashboard');
            }
        } else {
            return redirect('/staff-log')->with('error', 'The specified account does not exist');
        }
    }

    function logout()
    {
        $request->session()->flash('status', 'Task was successful!');
        return redirect('/');
    }



}
