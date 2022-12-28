<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use App\Models\TicketRaise;
use App\Models\TicketIssue;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
class TicketRaiseApiController extends Controller
{  
     
          public function getTicketProblem(Request $request)
    {
         $ticketissue = TicketIssue::select('issue_title')->get();
       
             if($ticketissue){
                    return response()->json(['error' => false, 'data' => $ticketissue]);
                
            } else {
                return response()->json(['error' => true, 'data' => 'Somethings wants wrong']);
            }
    }
     
        
     public function ticketRaise(Request $request)
    {
         $user = new TicketRaise;
         $user->user_id = $request->user_id;
          $user->department = $request->department;
        $user->problem_head = $request->problem_head; 
         $user->problem_des = $request->problem_des; 
             $user->save();
             if($user){
                    return response()->json(['error' => false, 'data' => $user]);
                
            } else {
                return response()->json(['error' => true, 'data' => 'Somethings wants wrong']);
            }
    }
}
