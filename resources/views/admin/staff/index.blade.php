<?php

 $role = DB::table('users')
 ->join('roles','roles.id','=','users.role_id')
 ->select('roles.*','users.*')
 ->first();

?>


@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')
    <!-- ============================================================== -->

    <!-- Bread crumb and right sidebar toggle -->

    <!-- ============================================================== -->

    <div class="page-breadcrumb bg-white">

        <div class="row align-items-center">

            <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12 pull-left">

                <h4 class="page-title">Staff Members</h4>

            </div>

            <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12 pull-right">
           
                <div class="d-md-flex ">

                    <!-- <ol class="breadcrumb ms-auto">

                   <li><a href="#" class="fw-normal">Dashboard</a></li>

                   </ol> -->

                    <a class="btn btn-success" style="text-align:right; margin-left: 133px;" href="{{ route('staff.create') }}">Add
                        Staff</a>

                </div>
              
            </div>

        </div>

        <!-- /.col-lg-12 -->

    </div>

    <!-- ============================================================== -->

    <!-- End Bread crumb and right sidebar toggle -->

    <!-- ============================================================== -->

    <!-- ============================================================== -->

    <!-- Container fluid  -->

    <!-- ============================================================== -->

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-12 col-lg-12 col-sm-12">

                <div class="white-box">



                    <div class="col-md-12 grid-margin stretch-card">

                        <div class="card">

                            <div class="card-body">



                                <div class="user">

                                    <div class="col-12">

                                        <div class="table-responsive">

                                            <table class="table table-bordered">

                                                <thead>

                                            <tr>


                                                        <th> Name </th>
                                                         <th>Email </th>
                                                        <th>Mobile</th>
                                                         <th> DOB</th>
                                                           <th>Address</th>
                                                        <th>Action</th>
                                                      

                                                    </tr>

                                                </thead>

                                                <tbody>

                                                

                                                    @foreach ($staff as $user)

                                                        <tr>

                                                            <td>{{ $user->name }}</td>

                                                             <td>{{ $user->email }}</td>
                                                              <td>{{ $user->mobile }}</td>
                                                              <td>{{ $user->dob }}</td>
                                                                <td>{{ $user->address }}</td>
                                       
                                                            <td>
                                                            
                                                                
                                                                <a href="{{ route('staff.edit', $user->id) }}"

                                                                    title="Edit"><i class="fa fa-edit text-success"></i></a> 
                                                            
                                                                &nbsp;
                                                                <form action="{{ route('staff.destroy', $user->id) }}"

                                                                    method="post">

                                                                    @csrf

                                                                    @method('DELETE')



                                                                    <button onclick="return confirm('Are You sure')"

                                                                        type="submit" title="Delete" class="no-background">

                                                                        <i class="fa fa-trash text-danger"></i></button>

                                                                </form>

                                                            </td>

                                                        </tr>

                                                    

                                                    @endforeach

                                                </tbody>

                                            </table>

                                            
                                        </div>

                                    </div>

                                </div>



                            </div>



                        </div>

                    </div>



                </div>

            </div>



        </div>

    </div>

@endsection

