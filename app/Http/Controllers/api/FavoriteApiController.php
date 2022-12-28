<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use App\Models\Favourite;
use App\Models\Client;
use App\Models\BlockUser;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
class FavoriteApiController extends Controller
{  
     public function addFavorite(Request $request)
    {
        $check = Favourite::where('fav_user_id',$request->fav_user_id)
        ->where('user_id',$request->user_id)->first();
      
        if(empty($check)){
        $user = new Favourite();
       
        $user->user_id = $request->input('user_id');
       $user->fav_user_id = $request->input('fav_user_id');
        // $user->type = $request->input('type');
        
        // $user->save();
            if ( $user->save()) {
                   $user = new Notification();
       
                $user->user_id = $request->input('user_id');
               $user->fav_user_id = $request->input('fav_user_id');
               $user->type = $request->input('type');
                $user->message = $request->input('message');
                $user->save();
                    return response()->json(['error' => false, 'data' =>$user]);
                
            } else {
                return response()->json(['error' => true, 'data' => 'Something is Wrong']);
            }
        }else{
              return response()->json(['error' => true, 'data' => 'This User Already in your Favourite List']);
        }
    }
   public function favoriteList(Request $request)
    {
        
        
          $user = DB::table('favourites')
        ->leftJoin('clients','clients.id','=','favourites.fav_user_id')
        ->where('clients.hide_user_status','=',0)
        ->where('favourites.user_id', $request->user_id)->get();
     
        
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
       
             if($user){
                    return response()->json(['error' => false, 'data' =>$user]);
                
            } else {
                return response()->json(['error' => true, 'data' => 'Something is Wrong']);
            }
    }
      public function allfavoriteList(Request $request)
    {
        //  $user = Favourite::orderBy('id', "desc")->where('user_id', $request->user_id)->get();
        $user = DB::table('favourites')
        ->leftJoin('clients','clients.id','=','favourites.fav_user_id')
        ->where('clients.hide_user_status','=',0)
        ->where('favourites.user_id', $request->user_id)->get();
     
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
        
             if($user){
                    return response()->json(['error' => false, 'data' => $user]);
                
            } else {
                return response()->json(['error' => true, 'data' => 'Users Not Found in your  favorite List']);
            }
    }
     public function deleteFavorite(Request $request)
            {
                $task = Favourite::where('fav_user_id', $request->fav_user_id)->first();
                if($task!=null){
                  $result = $task->delete();
                    if($result){
                     
                        return  response()->json(['error' => false, 'data'=>'Removed from Favorite'], 200);
                    }
                    else {
                        return response()->json(['error' => true, 'data' => 'Not Removed from Favorite']);
                    }
                } else {
                        return response()->json(['error' => true, 'data' => 'Data Not Available']);
                    }
         
            }
           public function checkfavoriteList(Request $request)
    {
         $user = Favourite::where([
                ['user_id', '=', $request->user_id],
                ['fav_user_id', '=', $request->fav_user_id],
                
            ])->first();
       
             if($user){
                    return response()->json(['error' => false, 'data' => 'User Already In Your Favourite List']);
                
            } else {
                return response()->json(['error' => true, 'data' => 'Users Not Found in your  favorite List']);
            }
    }
         public function favoriteMe(Request $request)
    {
        
        
        $user = DB::table('favourites')
        ->leftJoin('clients','clients.id','=','favourites.fav_user_id')
        ->where('clients.hide_user_status','=',0)
        ->where('favourites.fav_user_id', $request->user_id)->get();
        foreach($user as $temp){
           
            $data = Client::orderBy('id',"desc")->where('id',$temp->user_id)->first();
            if($data){
                   $data->test2 = false;
                    $check =  Favourite::where('fav_user_id',$request->user_id)->where('user_id',$data->id)->count();
               if($check > 0){
                   $data->test2 = true;
               }
               }
           $temp->fav_user_id=$data;
        }
       
             if($user){
                    return response()->json(['error' => false, 'data' => $user]);
                
            } else {
                return response()->json(['error' => true, 'data' => 'Users Not Found in your  favorite List']);
            }
    }
}
