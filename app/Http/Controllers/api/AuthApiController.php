<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\BlockUser;
use App\Models\Notification;
use App\Models\Client;
use App\Models\City;
use App\Models\Favourite;
use App\Models\PasswordReset;
use App\Models\View;
use Carbon\Carbon;
use Cache;
use URL;
use Illuminate\Support\Str;
use Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AuthApiController extends Controller
{  public function signUp(Request $request)
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
         $file = $request->file('image');
        $imageName = time().'.'.$file->extension();
        $imagePath = public_path(). '/uploads/image';

       $file->move($imagePath, $imageName);
       $user->image=$imageName;
 
       if($user->save()){
           $city = City::where('city',  $user->locate)->first();
           if(empty($city)){
               $citydata = new City;
               $citydata->city = $user->locate;
               $citydata->save();
           }
       } 

        if ($user) {
            return response()->json(['error' => false, 'data' => $user]);
        } else {
            response()->json(['error' => true, 'data' => 'Somthing error found!']);
        }
    
       
   
    }

    public function login(Request $request)
    {
        
        if ($request->email != null) {
            $user = Client::where('email', $request->email)->first();
           
           
            if ($user) {
                
                if (!Hash::check($request->input('password'), $user->password)) {
              
                     
                      $user->online=1;
                      $user->update();
                    return response()->json(['error' => true, 'data' => "Password Not metched!"]);
                } else {
                        if($user->block_status==1){
                     return response()->json(['error' => true, 'data' => 'You Have Blocked By Super Admin!']);
                } else{ 
                    return response()->json(['error' => false, 'result'=>$user, 'data' => "You have successfully login"]);
                }
                     }
                
            } else {
                return response()->json(['error' => true, 'data' => 'User not found!']);
            }
            
        } else {
            return response()->json(['error' => true, 'data' => 'Null data pass!']);
        }
    }
     public function profileDetails(Request $request)
    {
       
            $user = Client::where('id', $request->user_id)->first();
            if ($user) {
                
                    return response()->json(['error' => false, 'data' =>$user]);
                
            } else {
                return response()->json(['error' => true, 'data' => 'User not found!']);
            }
    }
         public function updateProfile(Request $request)
    {
       
           
             $user = Client::where('id',$request->user_id)->first();
         
           $user->intrest = $request->intrest;
            $user->personaliity = $request->personaliity;
          
         $user->height = $request->height;
         $user->bodytype = $request->bodytype;
         $user->ethinicity = $request->ethinicity;
         $user->education = $request->education;
         $user->relationship = $request->relationship;
         $user->children = $request->children;
         $user->smoke = $request->smoke;
         $user->drink = $request->drink;
         $user->seeking_in_relation = $request->seekingrelation;
         $user->impression = $request->impression;
         $user->aboutme = $request->aboutme;
         $user->update();
            if ($user) {
                
                    return response()->json(['error' => false, 'data' =>"Details Updated Successfully"]);
                
            } else {
                return response()->json(['error' => true, 'data' => 'User not found!']);
            }
    }
       public function viewProfileDetails(Request $request)
    {
         $view = new View();
       $view->user_id = $request->user_id;
       $view->view_user_id = $request->view_user_id;
       $view->save();
            if ($view->save()) {
                 $user = new Notification();
       
                $user->user_id = $request->input('user_id');
               $user->view_user_id = $request->input('view_user_id');
               $user->type = $request->input('type');
                $user->message = $request->input('message');
                $user->save();
            }
       $data = Client::where('id',$request->view_user_id)->first();
            if ($data) {
                
                    return response()->json($data);
                
            } else {
                return response()->json(['error' => true, 'data' => 'User not found!']);
            }
    
    }
    //       public function viewMe(Request $request)
    // {
       
    //   $view = new View();
    //   $view->user_id = $request->user_id;
    //   $view->view_user_id = $request->view_user_id;
    //   $view->save();
    //         if ($view->save()) {
    //              $user = new Notification();
       
    //             $user->user_id = $request->input('user_id');
    //           $user->view_user_id = $request->input('view_user_id');
    //           $user->type = $request->input('type');
    //             $user->message = $request->input('message');
    //             $user->save();
    //                 return response()->json(['error' => false, 'data' => 'Someone Viewed Your Profile']);
                
    //         } else {
    //             return response()->json(['error' => true, 'data' => 'Error']);
    //         }
    
    // }
              public function showViewMe(Request $request)
    {
       
            $data = DB::table('views')
                ->leftJoin('clients','clients.id','=','views.view_user_id')
                ->where('clients.hide_user_status','=',0)
                ->where('views.view_user_id',$request->user_id)->get();
             
            foreach($data as $temp){
                $sub =  Client::where('id',$temp->view_user_id)->first();
                 if($sub){
                   $sub->test2 = false;
                    $check =  Favourite::where('user_id',$request->user_id)->where('fav_user_id',$sub->id)->count();
               if($check > 0){
                   $sub->test2 = true;
               }
               }
              $temp->view_user_id=$sub;
            }
            if ($data) {
          
                    return response()->json(['error' => false, 'data' =>$data]);
                
            } else {
                return response()->json(['error' => true, 'data' => 'Error']);
            }
    
    }
    //Password Reset
    public function forgetPassword(Request $request){
        try{
           $user  =  Client::where('email',$request->email)->get();
            
            if(count($user)>0){
                $token = Str::random(30);
                $domain = URL::to('/');
                $url = $domain.'/reset-password?token='.$token;
                
                
                $data['url'] = $url;
                $data['email']=$request->email;
                 $data['title']="Password Reset";
                  $data['body']="Please Click On Below Link To Reset Your Password";
                  Mail::send('resetpassword.forgetPassword',['data'=>$data],function($message) use ($data){
                      $message->to($data['email'])->subject($data['title']);
                  });
                  $datetime = Carbon::now()->format('Y-m-d H:i:s');
                  PasswordReset::updateOrCreate(
                      ['email'=>$request->email],
                         [
                          'email'=>$request->email,
                          'token' =>$token,
                          'created_at'=>$datetime
                          ]
                      );
                       return response()->json(['success'=>true,'msg'=>'Please Check Your Mail To Reset']);
            }
            else{
                  return response()->json(['success'=>false,'msg'=>'User Not Found']);
            }
            
        }catch(\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        }
        
    }
    public function resetPasswordLoad(Request $request){
       $resetData =  db::table('password_resets')->get();


          
        if(isset($request->token) && count($resetData)>0){
          $user = Client::where('email',$resetData[0]->email)->first();
          
            return view('resetpassword.resetpassword',compact('user'));
        }else{
            return view('resetpassword.error');     
            }
    }

     public function resetPassword(Request $request){
         $request->validate([
             'password'=>'required|string|min:6|confirmed'
             ]);
             $user = Client::find($request->id);
             $user->password=hash::make($request->password);
             if($user->save()){
            $del =  PasswordReset::where('token',$request->token)->first();
            $del->delete();
                  return "<h1>Your Password Has been reset successfully<h1>";
             }else{
                  return "<h1>Something Wrong<h1>";
             }
            
     }
}
