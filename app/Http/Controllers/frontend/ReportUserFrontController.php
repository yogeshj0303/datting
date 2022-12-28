<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

use App\Models\Report;
use App\Models\Client;
use App\Models\Favourite;
use App\Models\BlockUser;
use App\Models\HideUser;
use App\Models\View;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
class ReportUserFrontController extends Controller
{  
     public function ReportUser(Request $request)
    {
        $user = new Report();
       
        $user->user_id = session()->get('clientid');
       $user->report_user_id = $request->input('report_user_id');
        $user->report_title = $request->input('report_title');
        $user->report_des = $request->input('report_des');
       if($user->save()){
           
       $data= Client::orderBy('id', "desc")->where('id', $request->report_user_id)->first();

          $data->report_status=1;
            $data->update();
      
            if ($user) {
                  
                    return back()->with('success' ,"Report Successfully");
                
            } else {
                return back()->with('error' , "Something is Wrong");
            }
       }else{
             return back()->with('error', "Something is Wrong");
       }
    }


    public function BlockUser(Request $request)
        {
            $reqID = $request->id;
          
        $data = BlockUser::where('user_id',$request->user_id)->first();
        
        if(empty($data)){
       $user = new BlockUser();
       
        $user->user_id = session()->get('clientid');
       $user->block_user_id = $reqID;
        if($user->save()){
            $blockuser = Client::where('id',$reqID)->first();
          
            $blockuser->user_block_status=1;
            $blockuser->update();
            $delfav =  Favourite::where('user_id',$request->user_id)->where('fav_user_id',$reqID)->first();
            // dd($delfav);
            if($delfav){
                $delfav->delete();
            }
            if ($user) {
                  
                    return back()->with('success',"User Block Successfully");
                
            } else {
                return back()->with('error' , "Something is Wrong");
            }
        }
        }else{
              $temp = BlockUser::where('block_user_id',$reqID)->first();
              if($temp){
              $temp->delete();
              $blockuser = Client::where('id',$reqID)->first();
            $blockuser->user_block_status=0;
            $blockuser->save();
            
                 return back()->with('success', "UnBlocked Successfully");
              }else{
                  $user = new BlockUser();
       
        $user->user_id = session()->get('clientid');
       $user->block_user_id = $reqID;
       if($user->save()){
            $blockuser = Client::where('id',$reqID)->first();
          
            $blockuser->user_block_status=1;
            $blockuser->update();
             $delfav =  Favourite::where('user_id',$request->user_id)->where('fav_user_id',$reqID)->first();
             if($delfav){
               $delfav->delete();  
             }
             $delview =  View::where('user_id',$request->user_id)->where('view_user_id',$reqID)->first();
             if($delview){
               $delview->delete();  
             }
        return back()->with('error' , "Blocked Successfully");
              }
              }
              }
        
    }
    
    public function Unblock(Request $request)
    {
        
         $reqID = $request->id;
         $user = session()->get('clientid');
          $data = BlockUser::where('user_id',$user)->where('block_user_id',$reqID)->first();
    
          if($data){
              $data->delete();
              $blockuser = Client::where('id',$reqID)->first();
            $blockuser->user_block_status=0;
            $blockuser->save();
            
                 return back()->with('success', "UnBlocked Successfully");
        }
    }
    
      public function ShowBlockUser(Request $request)
      {
        $data =  BlockUser::where('user_id',$request->user_id)->get();
        foreach($data as $temp){
            $blockuser = Client::where('id',$temp->block_user_id)->first();
             if($blockuser){
                   $blockuser->test3 = false;
                    $check =  BlockUser::where('user_id',$request->user_id)->where('block_user_id',$blockuser->id)->count();
               if($check > 0){
                   $blockuser->test3 = true;
               }
               }
            
            
            $temp->block_user_id=$blockuser;
        }
          if ($data) {
                  
                    return view('frontend.blocked-member',compact('data'));
                
            } else {
                return view('frontend.blocked-member')->with('error' , "No Data Available");
            }
        
    }
    
      public function HideUser(Request $request)
    {
        $reqID = $request->id;
        $data = HideUser::where('user_id',$request->user_id)->first();
        
        if(empty($data)){
       $user = new HideUser();
       
        $user->user_id = session()->get('clientid');
       $user->hide_user_id = $reqID;
        $user->hide_status =1;
       if($user->save()){
            $hideuser = Client::where('id',$reqID)->first();
          
            $hideuser->hide_user_status=1;
            $hideuser->update();
            if ($user) {
                  
                    return back()->with('success' ,"User Hide Successfully");
                
            } else {
                return back()->with('error' ,"Something is Wrong");
            }
       }
        }else{
              $temp = HideUser::where('hide_user_id',$reqID)->first();
              if($temp){
              $temp->delete();
                $hideuser = Client::where('id',$reqID)->first();
            $hideuser->hide_block_status=0;
           return response()->json(['error' => true, 'data' => 'UnHide Successfully']);
              }else{
                   $user = new HideUser();
       
        $user->user_id = session()->get('clientid');
       $user->hide_user_id = $reqID;
       
         if($user->save()){
            $hideuser = Client::where('id',$reqID)->first();
         
            $hideuser->hide_user_status=1;
            $hideuser->update(); 
              }
              return back()->with('success', "Hide Successfully");
              }
        }
    }
    
    
  public function ShowHideUser(Request $request)
      {
        $data =  HideUser::where('user_id',$request->user_id)->get();
        foreach($data as $temp){
            $hidekuser = Client::where('id',$temp->hide_user_id)->first();
             if($hidekuser){
                   $hidekuser->test3 = false;
                    $check =  HideUser::where('user_id',$request->user_id)->where('hide_user_id',$hidekuser->id)->count();
               if($check > 0){
                   $hidekuser->test3 = true;
               }
               }
            
            
            $temp->hide_user_id=$hidekuser;
        }
          if ($data) {
                  
                    return view('frontend.hidden-member',compact('data'));
                
            } else {
                return view('frontend.hidden-member')->with('error' , "No Data Available");
            }
        
    }
    
     public function Unhide(Request $request)
    {
        
         $reqID = $request->id;
         $user = session()->get('clientid');
          $data = HideUser::where('user_id',$user)->where('hide_user_id',$reqID)->first();
    
          if($data){
              $data->delete();
              $hideuser = Client::where('id',$reqID)->first();
            $hideuser->hide_user_status=0;
            $hideuser->save();
            
                 return back()->with('success', "UnHide Successfully");
        }
    }

}
