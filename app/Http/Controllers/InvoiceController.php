<?php

namespace App\Http\Controllers;

use App\Models\invdetails;
use App\Models\ivoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class InvoiceController extends Controller
{
    public function index()
    {

        $offexp = ivoice::latest()->paginate(5);
        return view('invoice.index',compact('offexp'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function printinvoice($invno)
    {
        $data = DB::table('invdetails')
        ->where('invno', $invno)->get();
        $invdata = DB::table('invoice')
        ->where('invno', $invno)->get();

        $shopdata = DB::table('shop')
        ->get();

    //dd($shopdata);
        return view('invoice.print',compact('data','invdata','shopdata'));
    }
    public function create()
    {
        $prodlist = DB::table('product')->get();
  
        $invno=$this->generateInvNumber();
        return view("invoice.create",compact('invno','prodlist'));
    }
    public function addMore()
    {
        $invno=$this->generateInvNumber();
        return view("invoice.create",compact('invno'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addMorePost(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'cname' => 'required',
            'invno' => 'required',
            'invdate' => 'required',

            'sgst' => 'required',
            'cgst' => 'required',

            'gtot' => 'required',
            'addmore.*.itemname' => 'required',
            'addmore.*.qty' => 'required',
            'addmore.*.rate' => 'required',
            'addmore.*.ddtax' => 'required',
            'addmore.*.amt' => 'required',
            'addmore.*.hsnnumber' => 'required',
        ]);
        $data = array(
            'cname'=> $request->input("cname"),
            'invno'=>$request->invno,
            'invdate'=>$request->invdate,
            'tot'=>$request->tot,
            'sgst'=>$request->sgst,
            'cgst'=>$request->cgst,
            'discount'=>$request->discount,
            'gtot'=>$request->gtot,
            'adrs'=>$request->adrs,
            'mblnmbr'=>$request->mblnmbr,
            'state'=>$request->state,
            'hsnnmbr'=>$request->hsnnmbr,
            'othercharges'=>$request->othercharges,
            'pincode'=>$request->pincode,

        );
//dd($data);
        ivoice::create($data);


        foreach ($request->addmore as $key => $value) {
            $order = new invdetails();

            $order->invno = $request->invno;
            $order->invdate = $request->invdate;
            $order->itemname =  $request->addmore[$key]['itemname'];
            $order->qty = $request->addmore[$key]['qty'];
            $order->rate = $request->addmore[$key]['rate'];
            $order->tax = $request->addmore[$key]['ddtax'];
            $order->amt = $request->addmore[$key]['amt'];
            $order->hsnnumber = $request->addmore[$key]['hsnnumber'];

            $order->save();
            
        }
         return redirect()->route('inv');
        //return back()->with('success', 'Record Created Successfully.');
    }

    public function generateInvNumber()
    {
        do {
            $code = mt_rand(100000, 999999);
        } while (ivoice::where("invno", "=", $code)->first());
        return 'INV'.$code;
    }
    public function destroy($id) {

        $data = ivoice::find($id);

        $data->delete();

        session()->flash('msg', 'Successfully Delete the operation.');

        return redirect()->route('inv');

    }
      public function show() {

    $data = ivoice::get();

    return view('invoice.index',['data' => $data]);

}
}
