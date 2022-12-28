<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Reader\Exception;
// use PhpOffice\PhpSpreadsheet\Writer\Xls;
// use PhpOffice\PhpSpreadsheet\IOFactory;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = DB::table('product')
        ->leftJoin('unit','product.qty', '=', 'unit.id')
        ->select('unit.unitname', 'product.*')
        ->get();
        return view('product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unitlist = DB::table('unit')
              ->select('id','unitname')
              ->get();
        return view('product.create',compact('unitlist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'prodname' => 'required|unique:product',
            'qty' => 'required',
            'up' => 'required',
            'hsnnumber' => 'required|unique:product'
        ]);

        Product::create($request->all());
        return redirect()->route('product.index')
            ->with('success','Product created successfully.');
    }
    public function mestore(Request $request)
    {
        for($i=0;$i<count($request->all());$i++)  {

            $order = new Product();

            $order->prodname = $request->prodname[$i];
            $order->qty =  $request->up[$i];
            $order->up =  $request->up[$i];
            $order->gst =  $request->gst[$i];
            $order->tot = $request->tot[$i];
            $order->hsnnumber = $request->hsnnumber[$i];


            $order->save();

        }
        return redirect()->route('product.index')
        ->with('success','Product created successfully.');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $unitlist = DB::table('unit')
        ->select('id','unitname')
        ->get();
        return view('product.edit',compact('unitlist','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'prodname' => 'required',
            'qty' => 'required',
            'up' => 'required',

            'hsnnumber' => 'required'

        ]);

        $product->update($request->all());

        return redirect()->route('product.index')
            ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index')
            ->with('success','Product deleted successfully');
    }
}
