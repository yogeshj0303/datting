<?php

namespace App\Http\Controllers;
use App\Models\AddSubscription;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AddSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
              $subscription= DB::table('add_subscriptions')->get();
      
        return view('admin.subscription.index',compact('subscription'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('admin.subscription.addsubscription');
        
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
        $request->validate([
            'plan' => 'required',
            'price' => 'required',
         
        ]);
    
   
    $data = $request->all();
    $result = new AddSubscription;
   $result->plan = $data['plan'];
   $result->price = $data['price'];
    $result->discount = $data['discount'];
       $result->result = $data['result'];
      $result->no_of_event = $data['no_of_event'];
       $result->plan_validity = $data['plan_validity']."days";

$result->des =$data['des'] ;
       $result->save();

        return redirect()->route('addsubs.index')
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
            $subscription = AddSubscription::find($id);
        return view('admin.subscription.edit',['subscription'=> $subscription]);
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
          $request->validate([
            'plan' => 'required',
            'price' => 'required',
          
          
        ]);
        $result = AddSubscription::find($id);
        $data = $request->all();
   $result->plan = $data['plan'];
   $result->price = $data['price'];
     $result->discount = $data['discount'];
      $result->result = $data['result'];
        $result->no_of_event = $data['no_of_event'];
          $result->plan_validity = $data['plan_validity'];

 $result->des =$data['des'] ;
     $result->save();

        return redirect()->route('addsubs.index')
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
          $subscription=AddSubscription::find($id);
        $subscription->delete();

        return redirect()->route('addsubs.index')
            ->with('success','Deleted successfully');
    }
}
