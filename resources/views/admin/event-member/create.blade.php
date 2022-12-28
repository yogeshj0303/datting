@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')

    <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">Event Membership</h3>
        </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('eventmember.store') }}" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" name="event_membership_title" class="form-control" id="exampleInputEmail1" placeholder="Title">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Price</label>
          <input type="text" name="event_membership_price" class="form-control" id="exampleInputPassword1" placeholder="Price">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Validity</label>
            <input type="text" name="event_membership_validity" class="form-control" id="exampleInputPassword1" placeholder="FROM">
          </div>
     
          <div class="form-group">
            <label for="exampleInputPassword1">Event Plan Description</label>
            <input type="text" name="event_membership_des" class="form-control" id="exampleInputPassword1" placeholder="Plan Description">
          </div>
         
        
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-danger">Submit</button>
      </div>
    </form>
  </div>

  @endsection






