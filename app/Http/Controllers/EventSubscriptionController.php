<?php

namespace App\Http\Controllers;

use App\Models\EventSub;
use Illuminate\Http\Request;

class EventSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = EventSub::all();
        return view('admin.event-member.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.event-member.create');
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
           
   
    $result = new EventSub;
    $data = $request->all();
//    $result->role_id =$data['role_id'];
   $result->event_membership_title = $data['event_membership_title'];
   $result->event_membership_price = $data['event_membership_price'];
   $result->event_membership_validity =$data['event_membership_validity'];
   $result->event_membership_des =$data['event_membership_des'];

  
    $result->save();
        return redirect()->route('eventmember.index')
            ->with('success','Created successfully.');
    
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
        $roles=EventSub::find($id);
        $roles->delete();

        return redirect()->route('eventmember.index')
            ->with('success','Deleted successfully');

    }
}
