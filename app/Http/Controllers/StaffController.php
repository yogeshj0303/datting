<?php

namespace App\Http\Controllers;
use Hash;
use App\Models\Permission;
use App\Models\User;
use App\Models\Role;
use Auth;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
              $staff= DB::table('users')->where('id',"!=",1)->get();
        
              
            
             
        return view('admin.staff.index',compact('staff'));
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
      
         return view('admin.staff.add',compact('department'));
        
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
            'name' => 'required',
            'email' => 'required',
            'dob' => 'required',
         'address' => 'required',
         'password' => 'required',
         'mobile' => 'required',
          'designation' => 'required',
           
        ]);
      
    $result = new User;
    $data = $request->all();
    $result->designation =$data['designation'];
   $result->name = $data['name'];
   $result->email = $data['email'];
   $result->dob =$data['dob'];
   $result->mobile =$data['mobile'];
   $result->address =$data['address'];

   $result->password =Hash::make($data['password']);
      
    $result->save();
        return redirect()->route('staff.index')
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
            $staff = User::find($id);
        return view('admin.staff.edit',['staff'=> $staff,'department'=>$department]);
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
            'name' => 'required',
            'email' => 'required',
            'dob' => 'required',
         'address' => 'required',
         'password' => 'required',
         'mobile' => 'required',
           'designation' => 'required',
        ]);
        $result = User::find($id);
        $data = $request->all();
    $result->designation =$data['designation'];
  $result->name = $data['name'];
   $result->email = $data['email'];
   $result->dob =$data['dob'];
   $result->mobile =$data['mobile'];
$result->address =$data['address'];
$result->password =Hash::make($data['password']);
     $result->save();

        return redirect()->route('staff.index')
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
          $staff=User::find($id);
        $staff->delete();

        return redirect()->route('staff.index')
            ->with('success','Deleted successfully');
    }
}
