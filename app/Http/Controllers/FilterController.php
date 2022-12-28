<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Client;
use App\Models\City;
use DB;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;

class FilterController extends Controller
{
   function index(Request $request){

    // $city = City::get();
   $city =  Client::select('locate')
            ->distinct()
            ->get();
//  echo "<pre>";
//  print_r($city);
//  die;
    foreach($city as $temp){
    $countMan =  Client::where('gender','Man')->where('locate',$temp->locate)->count();
     $temp->cman=$countMan;
     $countWoman =  Client::where('gender','Woman')->where('locate',$temp->locate)->count();
     $temp->cwoman=$countWoman;
      $countUnPaidMan=  Client::where('sub_status','=',0)->where('gender','Man')->where('locate',$temp->locate)->count();
       $temp->cunpaidman=$countUnPaidMan;
      $countUnPaidWoman=  Client::where('sub_status','=',0)->where('gender','Woman')->where('locate',$temp->locate)->count();
       $temp->cunpaidwoman=$countUnPaidWoman;
    $countPaidMan=  Client::where('sub_status','=',1)->where('gender','Man')->where('locate',$temp->locate)->count();
       $temp->cpaidman=$countPaidMan;
     $countPaidWoman=  Client::where('sub_status','=',1)->where('gender','Man')->where('locate',$temp->locate)->count();
       $temp->cpaidwoman=$countPaidMan;

    }                 
       
    return view('admin.Filters.citywisefilter',compact('city'));
   }
    function show(){

    return view('admin.Filters.filter');
   }
    function cityFilter(Request $request){
             $currentDateTime = Carbon::now();
        $newDateTime = Carbon::now()->subDays(7);
            $period = CarbonPeriod::create($newDateTime, $currentDateTime);
         foreach ($period as $date) {
   $date =  $date->format('Y-m-d');
   
}
$cityName = $request->locate;
// Convert the period to an array of dates
   
$dates = $period->toArray(); 

$arrLength = count($dates);
$countarray = [];
$countarray1 = [];
$countarray2 = [];
$countarray3 = [];
$countarray4 = [];
$countarray5 = [];
$datedata = [];
for($i = 0; $i < $arrLength; $i++) {
    
    $var = $dates[$i]->format('Y-m-d');
     
 
             $mancount = Client::where('locate',$request->locate)->where('gender','Man')->where('joindate',$var)
                     ->count();
                     
             $womancount = Client::where('locate',$request->locate)->where('gender','Woman')->where('joindate',$var)
                     ->count();
             $countUnPaidMan=  Client::where('sub_status','=',0)->where('gender','Man')->where('joindate',$var)->where('locate',$request->locate)
                    ->count();            
             
             $countUnPaidWoman=  Client::where('sub_status','=',0)->where('gender','Woman')->where('joindate',$var)->where('locate',$request->locate)
                    ->count(); 
             $countPaidMan=  Client::where('sub_status','=',1)->where('gender','Man')->where('joindate',$var)->where('locate',$request->locate)
                    ->count();
             $countPaidWoman=  Client::where('sub_status','=',1)->where('gender','Man')->where('joindate',$var)->where('locate',$request->locate)
                    ->count();
            
              array_push($countarray,$mancount); 
               array_push($countarray1,$womancount); 
               array_push($countarray2,$countUnPaidMan); 
               array_push($countarray3,$countUnPaidWoman); 
               array_push($countarray4,$countPaidMan); 
               array_push($countarray5,$countPaidWoman); 
               
              array_push($datedata,$var);                   
}
  $vardata = implode(',', $datedata);
   $dates = explode(',',$vardata);
   
   
  $dataaaray = implode(',', $countarray);
   $mandata = explode(',',$dataaaray);
//   echo "<pre>";
//   print_r($mandata);
//   die;
     $dataaaray1 = implode(',', $countarray1);
   $womandata = explode(',',$dataaaray1);
   
     $dataaaray2 = implode(',', $countarray2);
   $manunpaiddata = explode(',',$dataaaray2);
   
      $dataaaray3 = implode(',', $countarray3);
   $womanunpaiddata = explode(',',$dataaaray3);
   
    $dataaaray4 = implode(',', $countarray4);
   $manpaiddata = explode(',',$dataaaray4);
   
    $dataaaray5 = implode(',', $countarray5);
   $womanpaiddata = explode(',',$dataaaray5);
   
    $dataaaray6 = implode(',', $datedata);
   $datadate = explode(',',$dataaaray6);

    //  $countdata = Client::where('locate',$request->locate)->whereBetween('joindate',[$newDateTime,$currentDateTime])->count();


// Iterate over the period

 
    return view('admin.Filters.datewisefilter',compact('cityName','dates','mandata','womandata','manunpaiddata','womanunpaiddata','manpaiddata','womanpaiddata'));
   }
}
