@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')

    <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">Department</h3>
        </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('department.update',$department->id) }}" method="POST">
        @csrf
        @method('PUT')
      <div class="card-body">

       <div class="form-group">
                              <label class="label_field">Department</label>
                          <input type="text" name="department_name"  class="form-control" value="{{$department->department_name}}" placeholder="Department Name" />
                           </div>
                          
        
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-danger">Submit</button>
      </div>
    </form>
  </div>

  @endsection






