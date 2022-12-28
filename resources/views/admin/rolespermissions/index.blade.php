<?php

 $roles = DB::table('users')
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

                <h4 class="page-title">Roles & Permissions</h4>

            </div>

            <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12 pull-right">
            
                
                <div class="d-md-flex ">

                    <!-- <ol class="breadcrumb ms-auto">

                   <li><a href="#" class="fw-normal">Dashboard</a></li>

                   </ol> -->

                    <a class="btn btn-success" style="text-align:right; margin-left: 133px;" href="{{ route('roles.create') }}">Add
                        Roles</a>

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

                                                <th>S No</th>
                                                        <th>  Name </th>
                                                      
                                                        <th>Action</th>
                                                      

                                                    </tr>

                                                </thead>
                                                @foreach ($role as $key => $user)

                                                <tr>
                    
                                                    <td>{{ ++$key }}</td>
                    
                                                    <td>{{ $user->role_name }}</td>
                    
                                            
                    
                    
                                                                                <td>
                                                                                   
                                                                
                                                                                    <a href="{{ route('roles.edit', $user->id) }}"
                    
                                                                                        title="Edit"><i class="fa fa-edit text-success"></i></a> 
                                                                                     
                    
                                                                                    &nbsp;
                                                                                    
                                                                                    <form action="{{ route('roles.destroy', $user->id) }}"
                    
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

