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

                <h4 class="page-title">Users Reports</h4>

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

                    <table class="table table-bordered">

                        <tr>


                            <th>S no</th>

                            <th>User Name</th>
                          
                            <th>Action</th>

                        </tr>

                        @foreach ($data as $key => $user)

                            <tr>

                                <td>{{ ++$key }}</td>

                                 <td>{{ $user->username }}</td>




                                <td>
                            @if($role->change_report==1)     
                                  @if($user->status==1)
                          <a href="{{url('admin/status/0')}}/{{$user->id}}"><button type="button" class="btn btn-success">UnBlocked Account</button></a>
                       @elseif($user->status==0)
                          <a href="{{url('admin/status/1')}}/{{$user->id}}"><button type="button" class="btn btn-danger">blocked Account</button></a>
                      @endif
                      @endif
                      </td>

                                </td>

                            </tr>

                        @endforeach

                    </table>



                </div>

            </div>

        </div>





    </div>

    </div>

@endsection

