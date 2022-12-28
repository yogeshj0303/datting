<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Client;
use App\Models\City;
use Illuminate\Support\Facades\Redirect;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Str;

class RegisterFrontController extends Controller

{
    
     public function Sign_up()
    {
        return view("frontend.sign-up");
    }

  public function Register(Request $request)
    {
      
        $user = new Client();
       $user->referral_code= Str::random(20);
       
        $user->gender = $request->input('gender');
       $user->intrest = $request->input('intrest');
        $user->personaliity = $request->input('personaliity');
         $user->email = $request->input('email');
         $user->dob = $request->input('dob');
         $user->username = $request->input('username');
         $user->locate = $request->input('locate');
         $user->pincode = $request->input('pincode');
         $user->height = $request->input('height');
         $user->bodytype = $request->input('bodytype');
         $user->ethinicity = $request->input('ethinicity');
         $user->education = $request->input('education');
         $user->relationship = $request->input('relationship');
         $user->children = $request->input('children');
         $user->smoke = $request->input('smoke');
         $user->drink = $request->input('drink');
         $user->seeking_in_relation = $request->input('seekingrelation');
         $user->impression = $request->input('impression');
         $user->aboutme = $request->input('aboutme');
          $user->joindate= Carbon::now()->toDateString();
   
         $user->password = Hash::make($request->input('password'));
         
         if ($request->hasfile('image')) {

            $file = $request->file('image');
    
            $extension = $file->getClientOriginalExtension();
    
            $filename = time() . '.' . $extension;
    
            $file->move('uploads/image/', $filename);
    
            $user->image = $filename;
              }
       
 
       if($user->save()){
           $city = City::where('city',  $user->locate)->first();
           if(empty($city)){
               $citydata = new City;
               $citydata->city = $user->locate;
               $citydata->save();
           }
       } 

        if ($user) {
            return redirect('options')->with('success','You have registered successfully'); 
        } else {
            return redirect('sign-up');
        }
    
       
   
    }
    
     public function Login()
    {
        return view("frontend.login");
    }
    
    
     public function LoggedIn(Request $request)
    {
        
        if ($request->email != null) {
           $user = DB::table('clients')
            ->where(['email' => $request->email])->get();
           
            if ($user) {
                
                if (!Hash::check($request->input('password'), $user[0]->password)) {
              
                     
                      $user->online=1;
                      $user->update();
                    return redirect()->back()->with('error','Password not matched'); 
                } else {
                        if($user[0]->block_status==1){
                            
                    return redirect()->back()->with('error','You Have Blocked By Super Admin!'); 
                } else{ 
                    
                    $request->session()->put('clientlogin', true);
               $dd =  $request->session()->put('clientid', $user[0]->id);
                $request->session()->put('client_intrest', $user[0]->intrest);
                $request->session()->put('client_name', $user[0]->username);
                 $request->session()->put('client_password', $user[0]->password);
                 
                     return redirect('options')->with('success','You have successfully login');
                   
                }
                     }
                
            } else {
                  return redirect()->back()->with('error','User not found!');
            }
            
        } else {
             return redirect()->back()->with('error','Null data pass!');
        
        }
    }
    
        public function LogoutUser(Request $request) {
        $request->session()->flush();       
        return redirect('loginfront');       
        }
        
        public function Setting(){
            return view('frontend.setting');
        }
    
    
    public function ChangePassword(Request $request){

    $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]); 


    $user = Client::find(session()->get('clientid'));

    if(Hash::check($request->current_password,$user->password)){

        $user->password = Hash::make($request->new_password);
        if($user->save()){

            return redirect('setting')->with('success',"password has been changed");

        }else{

            return redirect('setting')->with('error',"something went wrong");

        }
    
        }else{
    
        return redirect('setting')->with('error',"Old password did not match");
    
        }
    }
}
