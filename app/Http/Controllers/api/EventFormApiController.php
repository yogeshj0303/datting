<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use App\Models\EventForm;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
class EventFormApiController extends Controller
{  
        
           public function eventFormStore(Request $request)
    {
         $user = new EventForm();
          $user->user_id = $request->user_id;
         $user->event_name = $request->event_name;
         $user->event_duration = $request->travel_duration;
          $user->event_des = $request->event_description;
          $user->event_location = $request->event_location;
         $user->event_date = $request->event_date;
        $user->save();
             if($user){
                    return response()->json(['error' => false, 'data' => $user]);
                
            } else {
                return response()->json(['error' => true, 'data' => 'Somethings wants wrong']);
            }
    }
}
