<?php

namespace App\Http\Controllers\frontend;

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
class FavoriteFrontController extends Controller
{  
     public function viewMe(Request $request)
    {
       
       $view = new View();
       $view->user_id = session()->get('clientid');
       $view->view_user_id = $request->view_user_id;
       $view->save();
            if ($view->save()) {
                
                    return redirect('search')->with(['success' , 'Someone Viewed Your Profile']);
                
            } else {
                return redirect('search')->with(['error' , 'Somthing Wrong']);
            }
    
    }
    
          public function showViewMe(Request $request)
    {
         
                    return view('frontend.interest');
         
    }
    
    // public function AddtoFav(Request $request){
    //      $data = Client::where('id',$request->user_id)->first();
    //      if($data){
    //          $fav = new Favourite;
    //          $fav->user_id = $data->user_id;
    //          $fav->fav_user_id = $request->fav_user_id;
    //          if($fav->save()){
    //               return redirect()->back()->with('success', 'Added successfully');
    //          } else{
    //                 return redirect()->back()->with('error', 'Already in favorite');
    //      }
    //      }
    // }
    
     public function AddtoFav(Request $request)
    {
        $reqID = $request->id;
        $userid = session::get('clientid');
     
        $check = Favourite::where('fav_user_id',$reqID)
        ->where('user_id',$userid)->first();
      
        if(empty($check)){
        $user = new Favourite();
       
        $user->user_id =$userid;
       $user->fav_user_id = $reqID;
        // $user->type = $request->input('type');
        
        // $user->save();
            if ( $user->save()) {
                   $user = new Notification();
       
                $user->user_id = $userid;
               $user->fav_user_id = $reqID;
               $user->type = $request->input('type');
                $user->message = $request->input('message');
                $user->save();
                    return redirect()->back()->with('success', 'Added successfully');
                
            } else {
                return redirect()->back()->with('error', 'Somthing went wrong');
            }
        }else{
                return redirect()->back()->with('error', 'This User Already in your Favourite List');
        }
    }
    
     public function favoriteList(Request $request)
    {
         $user = Favourite::orderBy('id', "desc")->where('user_id', $request->user_id)->get();
        
        foreach($user as $temp){
            
        
            $data = Client::orderBy('id',"desc")->where('id',$temp->fav_user_id)->first();
             if($data){
                   $data->test2 = false;
                    $check =  Favourite::where('user_id',$request->user_id)->where('fav_user_id',$data->id)->count();
               if($check > 0){
                   $data->test2 = true;
               }
               }
           $temp->fav_user_id=$data;
        }
            
                return view('frontend.interest',compact('user'));
            
    }
  
  
}
