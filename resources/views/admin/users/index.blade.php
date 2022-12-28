
@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="page-breadcrumb bg-white">

               
                <!-- /.col-lg-12 -->
        
            </div>
        
              <div class="card-body">
                    
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                        <tr>


                            <th>S no</th>

                            <th> Name</th>

                            <th>Gender</th>
                            <th>Location</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $user)

                            <tr>

                                <td>{{ ++$key }}</td>

                                <td>{{ $user->username }}</td>

                                <td>{{ $user->gender }}</td>
                                <td>{{ $user->locate }}</td>
                             

  <td>

                                                                <form action="{{ route('userdata.destroy', $user->id) }}"

                                                                    method="post">

                                                                    @csrf

                                                                    @method('DELETE')



                                                                    <button onclick="return confirm('Are You sure')"

                                                                        type="submit" title="Delete" class="no-background">

                                                                        <i class="fa fa-trash text-danger"></i></button>
                                                                       <a href="{{route('user-admin.profile',$user->id)}}">View Details</a>
                                                                </form>

                                                               



                                                            </td>


                            </tr>
                             

                        @endforeach
                    </tbody>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@endsection

