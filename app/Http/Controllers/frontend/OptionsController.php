<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\AddSubscription;
use App\Models\SubscribedClient;
use App\Models\Client;
use App\Models\City;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Str;

class OptionsController extends Controller

{

     public function Option(Request $request){
       $data =  session()->get('clientid');
       $data1 =  session()->get('client_intrest');
        $subscription = DB::table('add_subscriptions')->get();
         $subscripeduser= DB::table('subscribed_clients')->get();
         $subscribed = DB::table('clients')->orderBy('plan_price', 'desc')->where('clients.id','!=',$data)->where('gender',"=",$data1)->where('user_block_status','=','0')
         ->where('clients.hide_user_status','=','0')->get();
       
        
          foreach($subscribed as $new){
            $event = DB::table('event_forms')->where('user_id',$new->id)->first();
             
            $new->event=$event;
        }
       
        
         
    
         return view("frontend.options",compact('subscribed','subscription','subscripeduser'));
    }
}

