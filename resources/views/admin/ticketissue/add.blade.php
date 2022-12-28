@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')

    <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">Ticket Issues</h3>
        </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('ticketissue.store') }}" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Problem Title</label>
          <input type="text" name="issue_title" class="form-control" id="exampleInputEmail1" placeholder="Problem Title">
        </div>
       <div class="form-group">
       <label for="exampleSelectBorder">Department</label>
       <select class="form-control"  name="department" id="exampleSelectBorder">
        <option>--Select Here--</option>
        @foreach($department as $temp)
        <option value="{{$temp->id}}">{{$temp->department_name}}</option>
       @endforeach
       </select>
 </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-danger">Submit</button>
      </div>
    </form>
  </div>

  @endsection






