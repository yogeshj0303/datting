<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use App\Models\MultipleImage;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
class MultipleImageApiController extends Controller
{  
        
           public function multipleImageStore(Request $request)
    {
         $user = new MultipleImage();
         $user->user_id = $request->user_id;
        if (!empty($request->image))
      
        {
                    $arr = explode(",", $request->image);
                   
                    $imagearr = array();
                    
                    for ($i = 0; $i < sizeof($arr); $i++) {
                        $filename = "IMG-" . date('Y-m-d') . rand() . ".jpg";
                        file_put_contents('uploads/image/' . $filename, base64_decode($arr[$i]));
                        array_push($imagearr, $filename);
                    }
                    $user->image = implode(',', $imagearr);
                }
                
             $user->save();
             if($user){
                    return response()->json(['error' => false, 'data' => $user]);
                
            } else {
                return response()->json(['error' => true, 'data' => 'Somethings wants wrong']);
            }
    }

}
