<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\EventForm;
use App\Models\Client;
use App\Models\City;
use App\Models\MultipleImage;
use App\Models\View;
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
         public function otherProfile(Request $request)
    {
        $data =  $request->id;
         
        $clients = DB::table('clients')
        ->leftJoin('add_subscriptions','clients.subs_id','=','add_subscriptions.id')
        ->select('add_subscriptions.plan as subs_name','clients.*')
        ->where('clients.id',"=",$data)->first();
       $photo = DB::table('multiple_images')->where('user_id',$data)->get();
             $event= EventForm::where('user_id',$clients->id)->get();
             
        $dateOfBirth = $clients->dob;
         $age = \Carbon\Carbon::parse($dateOfBirth)->age;
         
        $view = new View();
       $view->user_id = session()->get('clientid');
       $view->view_user_id = $data;
       $view->save();
         
        return view("frontend.other-profile",compact('clients','age','event','data','view'));
    }
    
    
     public function Profile()
    {
        $data =  session()->get('clientid');
         
        $clients = DB::table('clients')
        ->leftJoin('add_subscriptions','clients.subs_id','=','add_subscriptions.id')
        ->select('add_subscriptions.plan as subs_name','clients.*')
        ->where('clients.id',"=",$data)->first();
        //   $sub = SubscribedClient::first();
        
        $dateOfBirth = $clients->dob;
         $age = \Carbon\Carbon::parse($dateOfBirth)->age;
        return view("frontend.profile",compact('clients','age','data'));
    }
    
    // public function EditBio(Request $request){
    //       $bio = Client::find($id);
    //     return view('frontend.profile',['bio' =>  $bio]);
    // }
    
    

     public function UpdateProfile(Request $request)
    {
            $data =  session()->get('clientid');
            $table = Client::where('id',"=",$data)->first();
            $data = $request->all();
       
          $table->height = $data['height'];
          $table->bodytype = $data['bodytype'];
          $table->ethinicity = $data['ethinicity'];
          $table->education = $data['education'];
          $table->relationship = $data['relationship'];
          $table->children = $data['children'];
          $table->smoke = $data['smoke'];
          $table->drink = $data['drink'];
           
            $table->save();
      
               return redirect('userprofile')->with('success',"Details Updated Successfully");
    }
    
      public function Updatebaseinfo(Request $request)
    {
            $data =  session()->get('clientid');
            $table = Client::where('id',"=",$data)->first();
            $data = $request->all();
       
          $table->username = $data['username'];
          $table->email = $data['email'];
          $table->gender = $data['gender'];
          $table->intrest = $data['intrest'];
          $table->personaliity = $data['personaliity'];
          $table->dob = $data['dob'];
          $table->locate = $data['locate'];
           
            $table->save();
      
            return redirect('userprofile')->with('success',"Details Updated Successfully");
            
    }
    
    
      public function Updateaboume(Request $request)
    {
            $data =  session()->get('clientid');
            $table = Client::where('id',"=",$data)->first();
            $data = $request->all();
       
            $table->aboutme = $data['aboutme'];
            $table->save();
      
               return redirect('userprofile')->with('success',"Details Updated Successfully");
    }
    
        public function Updatebio(Request $request)
    {
            $data =  session()->get('clientid');
            $table = Client::where('id',"=",$data)->first();
            $data = $request->all();
       
            $table->impression = $data['impression'];
            $table->save();
      
               return redirect('userprofile')->with('success',"Details Updated Successfully");
    }
    
      public function UpdateImage(Request $request)
    {
            $data =  session()->get('clientid');
            $table = Client::where('id',"=",$data)->first();
            $data = $request->all();
 
           if ($request->hasfile('image')) {
    
            $file = $request->file('image');
    
            $extension = $file->getClientOriginalExtension();
    
            $filename = time() . '.' . $extension;
    
            $file->move('uploads/image/', $filename);
    
            $table->image = $filename;
              }
            $table->save();
      
               return redirect('userprofile')->with('success',"Image Updated Successfully");
    }
    
     public function EventForm()
    {
        return view('frontend.event-form');
    }

  public function EventFormStore(Request $request)
    {
        $user = new EventForm();
        $user->user_id = session()->get('clientid');
        $user->event_date = $request->event_date;
        $user->event_duration = $request->event_duration;
        $user->event_location = $request->event_location;
        $user->event_name = $request->event_name;
        $user->event_des = $request->event_des;
 
        $user->save();
             if($user){
                    return back()->with('success', "Event Created Successfully");
                
            } else {
                return back()->with('error',  "Something went wrong");
            }
    }
    
    
    
           public function MultipleImageStore(Request $request)
    {
          $fileNames =[];
        foreach($request->file('image') as $temp){
            $imageName = $temp->getClientOriginalName();
            $temp->move(public_path().'/uploads/image',$imageName);
            $fileNames[] = $imageName;
        }
        $images = implode(',',$fileNames);
        $user_id =session()->get('clientid');
     $status=$request->status;
        MultipleImage::create(['images' =>$images,'user_id' =>$user_id,'status'=>$status]);
        return back();
    }

}