
@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Users Event Form</h3>
              </div>
              <!-- /.card-header -->
             
              <div class="card-body">
                    
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S no</th>
                     <th>User Name</th>
                    <th> Event Name </th>
                    <th> Travel Duration </th>
                    <th> Event Location</th>
                     <th> Event Date</th>
                     <th>Event Descriptions</th>
                     <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $key => $temp)
                      
                    @endforeach
                    <tr>
                      <td>{{ ++$key }}</td>
                      <td>{{ $temp->username}}</td>
                      <td>{{ $temp->event_name}}</td>
                      <td>{{ $temp->event_duration }}</td>
                      <td>{{ $temp->event_location }}</td>
                      <td>{{ $temp->event_date }}</td>
                      <td>{{ $temp->event_des }}</td>
                      <td>
                        <form action="{{ route('eventform.destroy', $temp->id) }}"

                            method="post">

                            @csrf

                            @method('DELETE')



                            <button onclick="return confirm('Are You sure')"

                                type="submit" title="Delete" class="no-background">

                                <i class="fa fa-trash text-danger"></i></button>

                        </form>
                    </td>

                    </tr>
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

