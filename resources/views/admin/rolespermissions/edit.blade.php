


@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')
    <!-- ============================================================== -->

    <!-- Bread crumb and right sidebar toggle -->

    <!-- ============================================================== -->

    <div class="page-breadcrumb bg-white">

        <div class="row align-items-center">

            <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12 pull-left">

                <h4 class="page-title">Add Roles</h4>

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

                                            <form method="POST" action="{{ route('roles.update',$user->id) }}" enctype="multipart/form-data">

                                                @csrf
                                                @method('PUT')

                                                <div class="row">


                                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                                        <div class="form-group">

                                                            <strong>Role Name:</strong>

                                                            <input type="text" value="{{ $user->role_name }}" name="role_name" placeholder="Role Name" id="hsnnumber"

                                                                class="form-control">

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
             <td> <input type="checkbox" name="add_sub" value="1"  @if($user->add_sub == 1) checked @endif />Create<br>
             <input type="checkbox" name="edit_sub" value="1" @if($user->edit_sub == 1) checked @endif/>Update<br>
              <input type="checkbox" name="delete_sub" value="1" @if($user->delete_sub == 1) checked @endif/>Delete<br>
            <input type="checkbox" name="view_staff" value="1"  @if($user->view_staff== 1) checked @endif/>View</td>

            </tr>
           <tr>
             <td>Role And Permission</td>
             <td> <input type="checkbox" name="add_role" value="1"  @if($user->add_role== 1) checked @endif/>Create<br>
             <input type="checkbox" name="edit_role" value="1" @if($user->edit_role == 1) checked @endif/>Update<br>
             <input type="checkbox" name="delete_role" value="1"  @if($user->delete_role == 1) checked @endif/>Delete<br>
             <input type="checkbox" name="view_staff" value="1"  @if($user->view_staff== 1) checked @endif/>View</td>

            </tr>
           <tr>
             <td>Staff</td>
            <td> <input type="checkbox" name="add_staff" value="1"  @if($user->add_staff == 1) checked @endif/>Create<br>
              <input type="checkbox" name="edit_staff" value="1" @if($user->edit_staff == 1) checked @endif/>Update<br>
            <input type="checkbox" name="delete_staff" value="1"  @if($user->delete_staff== 1) checked @endif/>Delete<br>
             <input type="checkbox" name="view_staff" value="1"  @if($user->view_staff== 1) checked @endif/>View</td>

            </tr>
           <tr>
            <td>User Report</td>
           <td> <input type="checkbox" name="change_report" value="1"  @if($user->change_report == 1) checked @endif/>Change Status<br>
           <input type="checkbox" name="delete_report" value="1" @if($user->delete_report == 1) checked @endif/>Delete<br>
            <input type="checkbox" name="view_report" value="1"  @if($user->view_report== 1) checked @endif/>View</td>
          </tr>
          <tr>
            <td>Users</td>
            <td> <input type="checkbox" name="view_user" value="1"  @if($user->view_user == 1) checked @endif/>View<br>
            <input type="checkbox" name="delete_report" value="1" @if($user->delete_user == 1) checked @endif/>Delete</td>
          </tr>
       </tbody>
    </table>


                  
    <div class="col-xs-12 col-sm-12 col-md-12">

        <br> <br>

        <button type="submit" class="btn btn-denger">Update Subscription</button>

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

