@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')
    <!-- ============================================================== -->

    <!-- Bread crumb and right sidebar toggle -->

    <!-- ============================================================== -->

    <div class="page-breadcrumb bg-white">

        <div class="row align-items-center">

            <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12 pull-left">

                <h4 class="page-title">Staff</h4>

            </div>

            <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12 pull-right">

                <div class="d-md-flex ">

                    <!-- <ol class="breadcrumb ms-auto">

                   <li><a href="#" class="fw-normal">Dashboard</a></li>

                   </ol> -->



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



                    <div class="row">

                        <div class="col-md-12 stretch-card">

                            <div class="card card-danger">

                                <div class="card-body">



                                    <div class="col-md-12">

                                        @if ($errors->any())

                                            <div class="alert alert-danger">

                                                <strong>Whoops!</strong> There were some problems with your input.

                                                <ul>

                                                    @foreach ($errors->all() as $error)

                                                        <li>{{ $error }}</li>

                                                    @endforeach

                                                </ul>

                                            </div>

                                        @endif

                                        <div class="col-md-6">

                                            <form action="{{ route('staff.update', $staff->id) }}" method="POST">

                                                @csrf
                                                @method('PUT')
                                               
                                                <div class="row">


                                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                                        <div class="form-group">

                                                            <strong> Name:</strong>

                                                            <input type="text" name="name"  value="{{$staff->name}}" placeholder="Name" id="hsnnumber"

                                                                class="form-control">

                                                        </div>

                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                                        <div class="form-group">

                                                            <strong>Email:</strong>

                                                            <input type="email" name="email"  value="{{$staff->email}}" placeholder="Email" id="prodname"

                                                                class="form-control">

                                                        </div>

                                                    </div>

                                               

                                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                                        <div class="form-group">

                                                            <strong>Mobile No:</strong>

                                                            <input type="text" style="text-align: left"  value="{{$staff->mobile}}" "name="mobile" placeholder="Mobile No" id="up" class="form-control">

                                                        </div>

                                                    </div>
                                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                                  <div class="form-group">

                                                            <strong>Date Of Birth</strong>

                                                            <input type="date" style="text-align: left"  value="{{$staff->dob}}" name="dob" id="up" class="form-control">

                                                        </div>

                                                    </div>
                                                 <div class="form-group">

                                                            <strong>Address:</strong>
                                                        <textarea id="w3review" placeholder="Address"  value="{{$staff->address}}"  name="address" class="form-control" rows="4" cols="50"></textarea>
                                                           

                                                        </div>

                                                    </div>

  
                                                    
                                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="form-group">

                                                            <strong>Passoword:</strong>

                                                            <input type="password" style="text-align: left" value="{{$staff->password}}" name="password" placeholder="Password" id="up" class="form-control">

                                                        </div>

                                                    </div>
                                                     <div class="col-xs-12 col-sm-12 col-md-12">
                                                       <label for="exampleSelectBorder">Department</label>
                                                          <select class="custom-select form-control-border" name="role_id" id="exampleSelectBorder">
                                                            <option>--Select Here--</option>
                                                            @foreach($department as $temp)
                                                            <option value="{{$temp->id}}">{{$temp->department_name}}</option>
                                                            @endforeach
                                                          </select>

                                                    
                                                </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                                        <br> <br>

                                                    <button type="submit" class="btn btn-danger">Update</button>

                                                    </a>

                                                </div>



                                        </form>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

                              <script>



$(document).on('change', '.amtclass', function() {

            this.value = parseFloat(this.value).toFixed(2);

        });

                                </script>

                        @endsection







