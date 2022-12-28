<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Client;
use App\Models\City;
use App\Models\Notification;
use App\Models\Favourite;
use App\Models\EventForm;
use App\Models\SubscribedClient;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Str;

class SearchFrontController extends Controller

{
    public function Search(Request $request)
    {
        $data =  session()->get('clientid');
      $data1 =  session()->get('client_intrest');
      
        $clients = DB::table('clients')->where('gender',"=",$data1)->where('id',"!=",$data)->where('user_block_status','=','0')->where('hide_user_status','=','0')->get();
        foreach($clients as $new){
            $event = DB::table('event_forms')->where('user_id',$new->id)->first();
             
            $new->event=$event;
        }
                                       
         $user = DB::table('event_forms')->where('user_id','!=',$request->user_id)
         ->leftjoin('clients', 'event_forms.user_id', '=', 'clients.id')
         ->select('clients.*','event_forms.*')
        ->get();
  
         return view('frontend.search',compact('clients','user'));
          
    }
    
     public function addFavorite(Request $request)
    {
        $check = Favourite::where('fav_user_id',$request->fav_user_id)
        ->where('user_id',$request->user_id)->first();
      
        if(empty($check)){
        $user = new Favourite();
       
        $user->user_id = session()->get('clientid');
       $user->fav_user_id = $request->input('fav_user_id');
        // $user->type = $request->input('type');
        
        // $user->save();
            if ( $user->save()) {
                   $user = new Notification();
       
                $user->user_id = session()->get('clientid');
               $user->fav_user_id = $request->input('fav_user_id');
               $user->type = $request->input('type');
                $user->message = $request->input('message');
                $user->save();
                    return ["result"=>"added to Fav"];
                
            } else {
                return response()->json(['error' => true, 'data' => 'Something is Wrong']);
            }
        }else{
              return response()->json(['error' => true, 'data' => 'This User Already in your Favourite List']);
        }
    }
}

