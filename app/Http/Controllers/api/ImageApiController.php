<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use App\Models\Client;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
class ImageApiController extends Controller
{  
        
           public function imageStore(Request $request)
    {
        $user = Client::where('id',$request->user_id)->first();
         $file = $request->file('image');
        $imageName = time().'.'.$file->extension();
        $imagePath = public_path(). '/uploads/image';

       $file->move($imagePath, $imageName);
       $user->image=$imageName;
       $user->update();
        return response()->json([
            "success" => true,
            'data'=>$imageName,
            "message" => "Image has been uploaded successfully."
        ]);
         
    }
    // public function showImage(Request $request){
    //     $user = Client::where('id',$request->user_id)->select('image')->first();
    //     if($user){
    //         return response()->json(['error' => false, 'data' => $user]);
    //     }else{
    //         return response()->json(['error' => false, 'data' => "Something Wants Wrong"]);
    //     }
    // }
}
