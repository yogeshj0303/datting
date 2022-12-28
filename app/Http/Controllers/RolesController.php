<?php

namespace App\Http\Controllers;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
              $role= DB::table('roles')->get();
      
        return view('admin.rolespermissions.index',compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $staff= DB::table('staff')->get();
         return view('admin.rolespermissions.add',compact('staff'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
   {
    $result = new Role;
    $data = $request->all();

   
    $result->role_name=$data['role_name'];
    
    
    //subscription permission
     if(isset($data['add_sub'])){

        $result->add_sub = $data['add_sub'];

       }
     if(isset($data['delete_sub'])){

        $result->delete_sub = $data['delete_sub'];

    }
    if(isset($data['edit_sub'])){

        $result->edit_sub = $data['edit_sub'];

    }

  if(isset($data['view_sub'])){

        $result->view_sub = $data['view_sub'];

    }
//dashboard permissions

 if(isset($data['view_dash'])){

        $result->view_sub = $data['view_sub'];

       }
     if(isset($data['edit_dash'])){

        $result->edit_dash = $data['edit_dash'];

    }
    
    //user permission
    
 if(isset($data['view_user'])){

        $result->view_user = $data['view_user'];

       }
     if(isset($data['delete_user'])){

        $result->delete_user = $data['delete_user'];

    }
    //staff permission
     if(isset($data['add_staff'])){

        $result->add_staff = $data['add_staff'];

       }
     if(isset($data['delete_staff'])){

        $result->delete_staff = $data['delete_staff'];

    }
    if(isset($data['edit_staff'])){

        $result->edit_staff = $data['edit_staff'];

    }

  if(isset($data['view_staff'])){

        $result->view_staff = $data['view_staff'];

    }
     //roles and permission
     if(isset($data['add_role'])){

        $result->add_role = $data['add_role'];

       }
     if(isset($data['delete_role'])){

        $result->delete_role = $data['delete_role'];

    }
    if(isset($data['edit_role'])){

        $result->edit_role = $data['edit_role'];

    }

  if(isset($data['view_role'])){

        $result->view_role = $data['view_role'];

    }
    //user report
      if(isset($data['delete_report'])){

        $result->delete_report = $data['delete_report'];

    }
    if(isset($data['change_report'])){

        $result->change_report = $data['change_report'];

    }

  if(isset($data['view_report'])){

        $result->view_report = $data['view_report'];

    }
        $result->save();

 return redirect()->route('roles.index')
            ->with('success','Created successfully.');

  }



  public function update(Request $request, $id)

  {

    $data = $request->all();



    $result = Role::find($id);
      $result->role_name=$data['role_name'];
    if(isset($data['add_sub'])){

        $result->add_sub = $data['add_sub'];

       }
       else{
        $result->add_sub = 0;
       }

     if(isset($data['delete_sub'])){

        $result->delete_sub = $data['delete_sub'];

    }
    else{
        $result->delete_sub = 0;
       }
    if(isset($data['edit_sub'])){

        $result->edit_sub = $data['edit_sub'];

    }
    else{
        $result->edit_sub = 0;
       }
    if(isset($data['view_sub'])){

        $result->view_sub = $data['view_sub'];

    }
    else{
        $result->view_sub = 0;
       }
       //dashboard permissions

// //  if(isset($data['view_dash'])){

// //         $result->view_sub = $data['view_sub'];

// //        }
// //            else{
// //         $result->view_sub = 0;
// //        }
//      if(isset($data['edit_dash'])){

//         $result->edit_dash = $data['edit_dash'];

//     }
//         else{
//         $result->edit_dash = 0;
//        }
       
       //User Permissions
       
 if(isset($data['view_user'])){

        $result->view_user = $data['view_user'];

       }
           else{
        $result->view_user= 0;
       }
     if(isset($data['delete_user'])){

        $result->delete_user = $data['delete_user'];

    }
        else{
        $result->delete_user = 0;
       }

       if(isset($data['add_staff'])){

        $result->add_staff = $data['add_staff'];

       }
       else{
        $result->add_staff = 0;
       }
       if(isset($data['edit_staff'])){

        $result->edit_staff = $data['edit_staff'];

       }
       else{
        $result->edit_staff = 0;
       }
       if(isset($data['delete_staff'])){

        $result->delete_staff = $data['delete_staff'];

       }
       else{
        $result->delete_staff = 0;
       } 
       if(isset($data['view_staff'])){

        $result->view_staff = $data['view_staff'];

       }
       else{
        $result->view_staff = 0;
       }     
       if(isset($data['change_report'])){

        $result->change_report = $data['change_report'];

       }
       else{
        $result->change_report = 0;
       }  
       if(isset($data['view_report'])){

        $result->view_report = $data['view_report'];

       }
       else{
        $result->view_report = 0;
       }   
       if(isset($data['delete_report'])){

        $result->delete_report = $data['delete_report'];

       }
       else{
        $result->delete_report = 0;
       }  
       if(isset($data['add_role'])){

        $result->add_role = $data['add_role'];

       }
       else{
        $result->add_role = 0;
       } 
       if(isset($data['edit_role'])){

        $result->edit_role = $data['edit_role'];

       }
       else{
        $result->edit_role = 0;
       } 
       if(isset($data['delete_role'])){

        $result->delete_role = $data['delete_role'];

       }
       else{
        $result->delete_role = 0;
       } 
       if(isset($data['view_role'])){

        $result->view_role = $data['view_role'];

       }
       else{
        $result->view_role = 0;
       } 
       $result->save();
 return redirect()->route('roles.index')
            ->with('success','Created successfully.');



   // return redirect()->route('banner-list.index');

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
            $user = Role::find($id);
        return view('admin.rolespermissions.edit',['user'=> $user]);
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
          $roles=Role::find($id);
        $roles->delete();

        return redirect()->route('roles.index')
            ->with('success','Deleted successfully');
    }
}
