
@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')
    <!-- ============================================================== -->

    <!-- Bread crumb and right sidebar toggle -->

    <!-- ============================================================== -->

    <div class="page-breadcrumb bg-white">

        <div class="row align-items-center">

            <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12 pull-left">

                <h4 class="page-title">Add Permissions</h4>

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

                                            <form action="{{ route('roles.store') }}" method="POST">

                                                @csrf



                                                <div class="row">


                                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                                        <div class="form-group">

                                                            <strong>Assign Permission</strong>

                                                            <select class="form-control select2" name="role_name" style="width: 100%;">
                                                            <option value="">--Select Role Name--</option>
                                                            @foreach( $staff as $row )
                                                             <option value="{{ $row->id }}">{{ $row->name }}&nbsp;({{$row->designation}})</option>
                                                               @endforeach

                                                          </select>

                                                        </div>

                                                    </div>
                                        
                        
                        <label class="label_field">Permission<span style="color:red">*</span></label>

                        <div class="table-responsive">
                           <table class="table table-bordered table-striped">
                              <thead>
                                 <th>Feature</th>
                                 <th>Compibilties</th>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>Subscription</td>
                                    <td> <input type="checkbox" name="add_sub" value="1" />Create<br>
                                      <input type="checkbox" name="edit_sub" value="1" />Update<br>
                                     <input type="checkbox" name="delete_sub" value="1" />Delete<br>
                                    <input type="checkbox" name="view_sub" value="1" />View</td>
                              
                                 </tr>
                                 <tr>
                                    <td>User Report</td>
                                    <td><input type="checkbox" name="change_report" value="1" />change status<br>
                                
                                    <input type="checkbox" name="view_report" value="1" />View<br>
                               <input type="checkbox" name="delete_report" value="1" />Delete</td>
                                 </tr>
                                   <tr>
                                    <td>Users</td>
                                    <td><input type="checkbox" name="delete_user" value="1" />Delete<br>
                                
                                    <input type="checkbox" name="view_user" value="1" />View</td>
                              
                                 </tr>
                                  <tr>
                                    <td>Roles Permissions</span></td>
                                    <td> <input type="checkbox" name="add_role" value="1" />Create<br>
                                     <input type="checkbox" name="edit_role"" value="1" />Upadte<br>
                                    <input type="checkbox" name="delete_role"" value="1" />Delete<br>
                                    <input type="checkbox" name="view_role" value="1" />View</td>
                              
                                 </tr>
                                 <tr>
                                    <td>Staff</span></td>
                                    <td> <input type="checkbox" name="add_staff" value="1" />Create<br>
                                     <input type="checkbox" name="edit_staff" value="1" />Upadte<br>
                                    <input type="checkbox" name="delete_staff" value="1" />Delete<br>
                                    <input type="checkbox" name="view_staff" value="1" />View</td>
                              
                                 </tr>
                                
                              </tbody> 
                           </table>
                        </div>

                                                    
                                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                                        <br> <br>

                                                        <button type="submit" class="btn btn-danger">Add Subscription</button>

                                                    </div>

                                                </div>



                                            </form>

                                        </div>



                                    </div>

                                </div>

                            </div>

                        </div>

                        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

                        <script type="text/javascript">

                            $(document).on('change', '#qty', function() {



                                var qty =  document.getElementById('qty').value;

                                var uprice =  document.getElementById('up').value;

                                document.getElementById('tot').value = parseFloat(qty * uprice).toFixed(2);



                            });



                            $(document).on('change', '#up', function() {



                                var qty =  document.getElementById('qty').value;

                                var uprice =  document.getElementById('up').value;

                                document.getElementById('tot').value = parseFloat(qty * uprice).toFixed(2);

                                document.getElementById('up').value = parseFloat(document.getElementById('up').value).toFixed(2);



                            });

                            $(document).on('change', '#gst', function() {



                               var qty = document.getElementById('qty').value;

                                var uprice = document.getElementById('up').value;

                                var gst = document.getElementById('gst').value;

                                var originalprice=parseFloat(qty*uprice);

                                alert(originalprice);

                                var amount= (originalprice * parseFloat(gst))/100;

                                var netprice= parseFloat(originalprice + amount).toFixed(2);

                                document.getElementById('tot').value = netprice;



                            });





                        </script>

                    @endsection

