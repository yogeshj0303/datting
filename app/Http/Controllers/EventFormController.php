<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\EventForm;
use DB;

use Illuminate\Http\Request;

class EventFormController extends Controller
{
   function index(){

    $data = DB::table('event_forms')
    ->leftJoin('clients','event_forms.user_id','=','clients.id')
    ->select('event_forms.*','clients.*')
    ->get();

    return view('admin.event-form.index',compact('data'));
   }

  public function destroy($id)
  {
      //
        $user=EventForm::find($id);
      $user->delete();

      return redirect()->route('eventform.index')
          ->with('success','Deleted successfully');
  }
}
