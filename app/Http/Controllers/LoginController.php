<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;



class LoginController extends Controller

{



  public function index()

  {



    return view('login');

  }



  public function login(Request $req)

  {

    $validatedData = $req->validate([

      'email' => 'required',

      'password' => 'required'

    ]);

    $result = DB::table('users')

      ->where('email', $req->input('email'))

      ->get();

    //$encrypted_password = crypt::encrypt($req->input('password'));



    $res = json_decode($result, true);



    if (sizeof($res) == 0) {

      $req->session()->flash('error', 'Invalid Credentials');

      return redirect('/');

    } else {

      $data = array(

        'email' => $req->email,

        'password' => $req->password

    );



      if (Auth::attempt($data)) {

        $user = User::where(["email" => $req['email']])->first();

        //$remember_me  = ( !empty( $req->remember ) )? TRUE : FALSE;

        //Auth::login($user, $remember_me);

        $req->session()->put('user', $result[0]->name);

        return redirect('dashboard');

      } else {

        $req->session()->flash('error', 'Invalid Login');

        return redirect('/');

      }

    }

  }



  public function logout()

  {

    Session::flush();

    return redirect()->route('login');

  }

  public function resetpwd()

    {

        return view('chgpwd');

    }



    public function updatePassword(Request $request)

    {

        //Auth::user()->email;

        //dd($request);

        $users = User::where('email', '=', $request->input('uemail'))->first();

        if ($users === null) {

            return redirect()->back()->with("error", "No records found");// User does not exist

        } else {

                $validatedData = $request->validate([

                    'uemail' => 'required',

                    'newpassword' => 'required|min:6',

                ]);

                $user = User::where('email', $request->uemail)

                ->update(['password' => Hash::make($request->newpassword)]);



                return redirect()->route('login')->with('success', 'Success! password has been changed');

            }



    }

}

