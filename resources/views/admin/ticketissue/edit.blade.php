@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')

    <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">Ticket Issue</h3>
        </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('ticketissue.update',$ticketissue->id) }}" method="POST">
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Problem Title</label>
          <input type="text" value="{{ $ticketissue->issue_title }}" name="plan" class="form-control" id="exampleInputEmail1" placeholder="Problem Title">
        </div>
       <div class="form-group">
                              <label class="label_field">Department</label>
                          <input type="number" name="department" id="price"  class="form-control" value="{{$ticketissue->department}}" placeholder="Department" />
                           </div>
                          
        
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-danger">Submit</button>
      </div>
    </form>
  </div>

  @endsection






