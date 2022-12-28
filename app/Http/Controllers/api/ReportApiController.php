<?php

namespace App\Http\Controllers\api;

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
class ReportApiController extends Controller
{  
     public function reportUser(Request $request)
    {
        $user = new Report();
       
        $user->user_id = $request->input('user_id');
       $user->report_user_id = $request->input('report_user_id');
        $user->report_title = $request->input('report_title');
        $user->report_des = $request->input('report_des');
       if($user->save()){
           
       $data= Client::orderBy('id', "desc")->where('id', $request->report_user_id)->first();
 
           $data->report_status=1;
            $data->update();
      
            if ($user) {
                  
                    return response()->json(['error' => false,'message'=>'Report Successfully','data' =>$user]);
                
            } else {
                return response()->json(['error' => true, 'data' => 'Something is Wrong']);
            }
       }else{
             return response()->json(['error' => true, 'data' => 'Something is Wrong']);
       }
    }

 public function blockUser(Request $request)
   {
        $data = BlockUser::where('user_id',$request->user_id)->first();
        
        if(empty($data)){
       $user = new BlockUser();
       
        $user->user_id = $request->input('user_id');
       $user->block_user_id = $request->input('block_user_id');
        if($user->save()){
            $blockuser = Client::where('id',$request->block_user_id)->first();
          
            $blockuser->user_block_status=1;
            $blockuser->update();
            $delfav =  Favourite::where('user_id',$request->user_id)->where('fav_user_id',$request->block_user_id)->first();
            dd($delfav);
            if($delfav){
                $delfav->delete();
            }
            if ($user) {
                  
                    return response()->json(['error' => false,'message'=>'User Block Successfully']);
                
            } else {
                return response()->json(['error' => true, 'data' => 'Something is Wrong']);
            }
        }
        }else{
              $temp = BlockUser::where('block_user_id',$request->block_user_id)->first();
              if($temp){
              $temp->delete();
              $blockuser = Client::where('id',$request->input('block_user_id'))->first();
            $blockuser->user_block_status=0;
            $blockuser->save();
            
                 return response()->json(['error' => true, 'data' => 'UnBlocked Successfully']);
              }else{
                  $user = new BlockUser();
       
        $user->user_id = $request->input('user_id');
       $user->block_user_id = $request->input('block_user_id');
       if($user->save()){
            $blockuser = Client::where('id',$request->block_user_id)->first();
          
            $blockuser->user_block_status=1;
            $blockuser->update();
             $delfav =  Favourite::where('user_id',$request->user_id)->where('fav_user_id',$request->block_user_id)->first();
             if($delfav){
               $delfav->delete();  
             }
             $delview =  View::where('user_id',$request->user_id)->where('view_user_id',$request->block_user_id)->first();
             if($delview){
               $delview->delete();  
             }
        return response()->json(['error' => true, 'data' => 'Blocked Successfully']);
              }
              }
              }
        
    }
        public function showBlockUser(Request $request){
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
                  
                    return response()->json(['error' => false,'data'=>$data]);
                
            } else {
                return response()->json(['error' => true, 'data' => 'No Data Available']);
            }
        
    }
     public function hideUser(Request $request)
    {
        $data = HideUser::where('user_id',$request->user_id)->first();
        
        if(empty($data)){
       $user = new HideUser();
       
        $user->user_id = $request->input('user_id');
       $user->hide_user_id = $request->input('hide_user_id');
        $user->hide_status =1;
       if($user->save()){
            $hideuser = Client::where('id',$request->hide_user_id)->first();
          
            $hideuser->hide_user_status=1;
            $hideuser->update();
            if ($user) {
                  
                    return response()->json(['error' => false,'message'=>'User Hide Successfully']);
                
            } else {
                return response()->json(['error' => true, 'data' => 'Something is Wrong']);
            }
       }
        }else{
              $temp = HideUser::where('hide_user_id',$request->hide_user_id)->first();
              if($temp){
              $temp->delete();
                $hideuser = Client::where('id',$request->input('hide_user_id'))->first();
            $hideuser->hide_block_status=0;
           return response()->json(['error' => true, 'data' => 'UnHide Successfully']);
              }else{
                   $user = new HideUser();
       
        $user->user_id = $request->input('user_id');
       $user->hide_user_id = $request->input('hide_user_id');
       
         if($user->save()){
            $hideuser = Client::where('id',$request->hide_user_id)->first();
         
            $hideuser->hide_user_status=1;
            $hideuser->update(); 
              }
              return response()->json(['error' => true, 'data' => 'Hide Successfully']);
              }
        }
    }
    public function showHideUser(Request $request){
        $data =  HideUser::where('user_id',$request->user_id)->get();
        foreach($data as $temp){
            $hideuser = Client::where('id',$temp->hide_user_id)->first();
             if($hideuser ){
                   $hideuser ->test2 = false;
                    $check =  Favourite::where('user_id',$request->user_id)->where('fav_user_id',$hideuser->id)->count();
               if($check > 0){
                   $hideuser->test2 = true;
                   
               }
                  $hideuser ->test4 = false;
                    $check1 =  HideUser::where('user_id',$request->user_id)->where('hide_user_id',$hideuser->id)->count();
               if($check1 > 0){
                   $hideuser->test4 = true;
                   
               }
               }
            $temp->hide_user_id=$hideuser;
        }
          if ($data) {
                  
                    return response()->json(['error' => false,'data'=>$data]);
                
            } else {
                return response()->json(['error' => true, 'data' => 'No Data Available']);
            }
        
    }

}
