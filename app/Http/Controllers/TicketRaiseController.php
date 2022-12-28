<?php

namespace App\Http\Controllers;

use App\Models\TicketRaise;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TicketRaiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('ticket_raises')->leftJoin('clients','ticket_raises.user_id','=','clients.id')
        ->select('clients.*','ticket_raises.*')
        ->get();
        
        return view('admin.ticketraise.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
          $user=TicketRaise::find($id);
      $user->delete();

      return redirect()->route('ticketraise.index')
          ->with('success','Deleted successfully');
    }
    public function status(Request $request, $status, $id)
    {
        $model = TicketRaise::find($id);
        $model->status = $status;
        $model->save();

        return redirect()->back()->with('msg', 'Product status updated');
    }
}
