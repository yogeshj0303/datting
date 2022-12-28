<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use App\Models\Client;
use App\Models\Favourite;
use App\Models\EventForm;
use App\Models\SubscribedClient;
use \Cache;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
class SearchingApiController extends Controller
{  
    
    public function searchByEvent(Request $request){
        $user = EventForm::orderBy('id','DESC')->where('event_date','<=',Carbon::now()->format('Y-m-d'))->where('user_id','!=',$request->user_id)->get();
         foreach($user as $temp)
          {
              $data =  Client::where('id',$temp->user_id)->first();
              $temp->user_id=$data;
              
          }
         if ($user) {
                
                    return response()->json(['error' => false, 'data' => $user]);
                
            } else {
                return response()->json(['error' => true, 'data' => 'Event not found!']);
            }
    }
    
     public function newest(Request $request)
    {
        $check = Client::orderBy('id','DESC')->where('id','=',$request->user_id)->select('intrest')->first();
     
       
            $user = Client::orderBy('plan_price','DESC')->where('user_block_status','=',0)->where('hide_user_status','=',0)->where('test1','=',0)->where('id','!=',$request->user_id)->where('gender','=',$check->intrest)->get();
          
           foreach($user as $temp)
           {
               
               $temp->test2=false;
               $data =  Favourite::where('user_id',$request->user_id)->where('fav_user_id',$temp->id)->count();
               if($data > 0){
                   $temp->test2 = true;
               }
            $checkevent =   EventForm::where('user_id',$temp->id)->select('event_date','event_name')->first();
            $temp->eventDetails=$checkevent;
              
           }
           
            if ($user) {
                
                    return response()->json(['error' => false, 'data' => $user]);
                
            } else {
                return response()->json(['error' => true, 'data' => 'User not found!']);
            }
      
    }
     public function nearest(Request $request)
    {  

    $check = Client::orderBy('plan_price','DESC')->where('id','=',$request->user_id)->select('intrest','locate')->first();
     
       
            $user = Client::orderBy('id','DESC')->where('test1','=',0)
            ->where('user_block_status','=',0)
            ->where('hide_user_status','=',0)
            ->where('id','!=',$request->user_id)
            ->where('gender','=',$check->intrest)
             ->where('locate','=',$check->locate)->get();
           foreach($user as $temp)
           {
               
               $temp->test2=false;
               $data =  Favourite::where('user_id',$request->user_id)->where('fav_user_id',$temp->id)->count();
               if($data > 0){
                   $temp->test2 = true;
               }
             $checkevent =   EventForm::where('user_id',$temp->id)->select('event_date','event_name')->first();
            $temp->eventDetails=$checkevent;
           }
           
            if ($user) {
                
                    return response()->json(['error' => false, 'data' => $user]);
                
            } else {
                return response()->json(['error' => true, 'data' => 'User not found!']);
            }
      
     
    }
    

        public function search(Request $request)
    {
       
            $user = Client::where('test1','=',0)
            ->where('user_block_status','=',0)
            ->where('hide_user_status','=',0)
            ->where('id','!=',$request->user_id)
            ->where('username',  'LIKE', '%'.$request->name. '%')
            ->orWhere('email',  'LIKE', '%'.$request->email. '%')
             ->orWhere('height',$request->height)
              ->orWhere('bodytype', 'LIKE', '%'.$request->bodytype. '%')
               ->orWhere('locate','LIKE', '%'.$request->locate. '%')
                ->orWhere('gender', '%'.$request->gender. '%')
                 ->orWhere('intrest',$request->intrest)
                ->orWhere('ethinicity',$request->ethnicity)
                ->orWhere('relationship', '%'.$request->relationship. '%')
                ->orWhere('children',$request->children)
                 ->orWhere('drink',$request->drink)
                 ->orWhere('education', '%'.$request->education. '%')
                 ->orWhere('smoke',$request->smoke)
                        ->get();
            foreach($user as $temp)
           {
               $temp->test2=false;
               $data =  Favourite::where('user_id',$request->user_id)->where('fav_user_id',$temp->id)->count();
               if($data > 0){
                   $temp->test2 = true;
               }
           }
            if (count($user)) {
                
                    return response()->json(['error' => false, 'data' =>$user]);
                
            } else {
                return response()->json(['error' => true, 'data' => 'User not found!']);
            }
    }
    

   
//   public function recentActive(Request $request)
//     {
//       // get user data
//         $user = Client::find($request->userid);

//         // check online status
//         if (Cache::has('user-is-online-' . $user->id))
//             $status = 'Online';
//         else
//             $status = 'Offline';

//         // check last seen
//         if ($user->last_seen != null)
//             $last_seen = "Active " . Carbon::parse($user->last_seen)->diffForHumans();
//         else
//             $last_seen = "No data";

//         // response
//         return response()->json([
//             'status' => $status,
//             'last_seen' => $last_seen,
//         ]);

//     }

            public function activeUser(Request $request)
              {
               $data = Client::where('id',$request->user_id)->first();
               
               $data->online=$request->online_status;
              
            // $data->last_seen=  Carbon::parse(Carbon::now())->diffForHumans();
        
               $data->save();
                if ($data) {
                
                    return response()->json(['error' => false, 'msg' =>'User is Online']);
                
            } else {
                return response()->json(['error' => true, 'data' => 'Something wants wrong']);
            }
              }
              
              
               public function inActiveUser(Request $request)
              {
               $data = Client::where('id',$request->user_id)->first();
               $data->online=$request->online_status;
                 $data->last_seen=  Carbon::parse(Carbon::now())->diffForHumans();
               $data->save();
                    if ($data) {
                
                    return response()->json(['error' => false, 'msg' =>'User is Offline']);
                
            } else {
                return response()->json(['error' => true, 'data' => 'Something wants wrong']);
            }
              }
        public function showOnlineUser(Request $request){
             $check = Client::orderBy('id','DESC')->where('id','=',$request->user_id)->where('user_block_status','=',0)->where('hide_user_status','=',0)->select('intrest')->first();
     
       
            $user = Client::orderBy('plan_price','DESC')->where('test1','=',0)->where('id','!=',$request->user_id)
                            ->where('online',"=",1)->where('gender','=',$check->intrest)->get();
           
           foreach($user as $temp)
           {
               
               $temp->test2=false;
               $data =  Favourite::where('user_id',$request->user_id)->where('fav_user_id',$temp->id)->count();
               if($data > 0){
                   $temp->test2 = true;
               }
            $checkevent =   EventForm::where('user_id',$temp->id)->select('event_date','event_name')->first();
            $temp->eventDetails=$checkevent;
              
           }
           
            if ($user) {
                
                    return response()->json(['error' => false, 'data' => $user]);
                
            } else {
                return response()->json(['error' => true, 'data' => 'User not found!']);
            }
      
        }
}
