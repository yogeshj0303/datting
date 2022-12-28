<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\SubscribedClient;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ProfileFrontController extends Controller

{
         public function SubscribedUser(Request $request)
    {
        $data =  session()->get('clientid');
        $subscribed = DB::table('subscribed_clients')->where('user_id',"=",$data)->first();
       dd()
        return view("frontend.subscription",compact('subscribed'));
    }
    
   

}