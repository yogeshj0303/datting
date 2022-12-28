<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use App\Models\AddSubscription;
use App\Models\SubscribedClient;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
class SubscriptionApiController extends Controller
{  
     public function addSubscription(Request $request){
        $data =  new SubscribedClient;
        
        $data->user_id = $request->user_id;
        $data->subscription_id = $request->subscription_id;
        
        $time = date('H:i:s', time());
        $data->subscribe_time  =$time;
        $data->subscribe_date =Carbon::now()->format('d-m-Y');
        $orderid = rand(1231,7879);
        $data->order_id ='ORDER' . $orderid;
         $data->order_status ="confirm";
        $data->referal_id=$request->referal_id;
       
          if ( $data->save()){
              $sub = AddSubscription::where('id', $request->subscription_id)->first();
                  $user = Client::where('id',$request->user_id)->first();
                  $user->plan_price=$sub->price;
                  $user->sub_status=1;
                  $user->subs_id= $request->subscription_id;
                  $user->update();
                    
                   $wallet = Client::where('referral_code',$request->referal_id)->first();
                   if($wallet){
                   $addAmount = $sub->price-$sub->result;
                  $wallet->wallet_amount= $wallet->wallet_amount +  $addAmount;
                  $wallet->update();
                   }
                   return response()->json(['error' => false, 'data' => 'You have Successfully Purchased this Membership Plan']);
                
            } else {
                return response()->json(['error' => true, 'data' => 'No Data Available']);
            }
        
    }
  
    public function ShowSubscription(Request $request){
        $data =  AddSubscription::all();
      
          if ($data){
                  
                    return response()->json(['error' => false, 'data' => $data]);
                
            } else {
                return response()->json(['error' => true, 'data' => 'No Data Available']);
            }
        
    }
   public function subscriptionValidity(Request $request){
                $data =  SubscribedClient::where('user_id',$request->user_id)->first();
              $subs = AddSubscription::where('id',$data->subscription_id)->first();
              
                  $date = date_create($data->subscribe_date);
                $validity = $subs->plan_validity;
                
        
        $demo = date_add($date, date_interval_create_from_date_string($validity));
        
        // dd($demo);
          
         if( Carbon::now() < Carbon::tomorrow()){
             
            return response()->json(['error' => false, 'data' => 'Already Subscribe For this plan']);
         }else{
              return response()->json(['error' => true, 'data' => 'Subscription Expired']);
         }
    }
}
