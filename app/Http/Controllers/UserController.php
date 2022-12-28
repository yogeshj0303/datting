<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Client;
use DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
   function index(){

    $data = DB::table('clients')->get();

    return view('admin.users.index',compact('data'));
   }
   function profile(Request $request){
    $reqId = $request->id;
    $data = DB::table('clients')->where('id',$request->id)->first();
    $report = DB::table('reports')->where('report_user_id',$data->id)
    ->leftJoin('clients','clients.id','=','reports.user_id')
    ->get();
    $event =DB::table('event_forms')->where('user_id',$data->id)
    ->leftJoin('clients','clients.id','=','event_forms.user_id')
    ->get();

    return view('admin.users.profile',compact('data','report','event','reqId'));
   }

   
  public function destroy($id)
  {
      //
        $user=Client::find($id);
      $user->delete();

      return redirect()->route('userdata.index')
          ->with('success','Deleted successfully');
  }
   public function status(Request $request, $status, $id)
    {
        $model = Client::find($id);
        $model->verify_status = $status;
       
        $model->save();

        return redirect()->back()->with('msg', 'Product status updated');
    }
     public function blockStatus(Request $request, $status, $id)
    {
        $model = Client::find($id);
        $model->block_status = $status;
       
        $model->save();

        return redirect()->back()->with('msg', 'Product status updated');
    }
}
