<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Unit;
use SweetAlert;
use DB;


class UnitController extends Controller



{

  public function index()

  {

    $data = Unit::paginate(5);

    return view('unit.index', ['data' => $data]);

  }



  public function create()

  {

    $vendor = Unit::get();

    return view('unit.create', ['vendor' => $vendor]);

  }

  public function store(Request $request)

  {

    $request->validate([
        'unitname' => 'required',


    ]);


    $data = $request->all();

    $result = new Unit;

   $result->unitname = $data['unitname'];



    $result->save();


    session()->flash('msg', 'Successfully insert the operation.');

    return redirect()->route('unit.index');

  }


  public function update(Request $request, Unit $unit)
    {
        $request->validate([
            'unitname' => 'required',
        ]);

        $unit->update($request->all());

        return redirect()->route('unit.index')
            ->with('success','unit updated successfully');
    }



  public function edit($id)

  {
    $result = Unit::select()
    ->where('id', '=', $id)
    ->get();

    //dd($result->all());

    //return view('Unit.edit', ['result' => $result,'list'=>$list]);

    return view('unit.edit', ['result' => $result]);

  }

  public function destroy($id) {

    $data = Unit::find($id);

    $data->delete();

    session()->flash('msg', 'Successfully Delete the operation.');

    return redirect()->route('unit.index');

}

  public function show()

  {

    $data = Unit::get();

    return view('unit.index', ['data' => $data]);

  }

}

