<?php

namespace App\Http\Controllers;
use Hash;
use App\Models\TicketIssue;

use Auth;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TicketIssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('ticket_issues')
        ->join('departments','departments.id','=','ticket_issues.department')
        ->select('departments.*','ticket_issues.*')->get();
        return view('admin.ticketissue.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       $department = db::table('departments')->get();
         return view('admin.ticketissue.add',compact('department'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
  
    $result = new TicketIssue;
    $data = $request->all();
    $result->issue_title =$data['issue_title'];
   $result->department= $data['department'];

    $result->save();
        return redirect()->route('ticketissue.index')
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
       $department = db::table('departments')->get();
            $ticketissue = TicketIssue::find($id);
        return view('admin.ticketissue.edit',['ticketissue'=> $ticketissue,'department'=> $department]);
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
       
        $result = ticketissue::find($id);
        $data = $request->all();
    $result->issue_title =$data['issue_title'];
  $result->department = $data['department'];

     $result->save();

        return redirect()->route('ticketissue.index')
            ->with('success','Updated successfully.');
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
          $staff=ticketissue::find($id);
        $staff->delete();

        return redirect()->route('ticketissue.index')
            ->with('success','Deleted successfully');
    }
}
