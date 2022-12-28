
@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ticket Raise</h3>
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
                    <th> Customer_Name </th>
                    <th> Problem Title</th>
                     <th>Descriptions</th>
                     <th>Approved By</th>
                  </tr>
                  </thead>
                  <tbody>
                     @foreach ($data as $key => $temp) 
                      
                   
                    <tr>
                      <td>{{ ++$key }}</td>
                      <td>{{ $temp->username }}</td>
                      <td>{{ $temp->problem_head }}</td>
                      <td>{{ $temp->problem_des }}</td>
                     
                      <td>
                        @if($temp->status==1)
                        @if(Auth::user()->id!=1)
                          <a href="{{url('categories/status/0')}}/{{$temp->id}}"><button type="button" class="btn btn-primary"  disabled>Final Approve By Super Admin</button></a>
                        @else
                      <a href="{{url('categories/status/2')}}/{{$temp->id}}"><button type="button" class="btn btn-primary">Final Approved By Super Admin</button></a>
                     <a href="{{url('categories/status/3')}}/{{$temp->id}}"><button type="button" class="btn btn-primary">Cancel</button></a>
                     @endif
                       @elseif($temp->status==0)
                          <a href="{{url('categories/status/1')}}/{{$temp->id}}"><button type="button" class="btn btn-warning">Approve</button></a>
                          <a href="{{url('categories/status/3')}}/{{$temp->id}}"><button type="button" class="btn btn-danger">Reject</button></a>
                      @endif
                    @if($temp->status==2)
                    <button type="button" class="btn btn-success">Approved</button>
                    @endif
                     @if($temp->status==3)
                    <button type="button" class="btn btn-danger">Rejected</button>
                    @endif
                        &nbsp;
                        <form action="{{ route('ticketraise.destroy', $temp->id) }}"

                            method="post">

                            @csrf

                            @method('DELETE')



                            <button onclick="return confirm('Are You sure')"

                                type="submit" title="Delete" class="no-background">

                                <i class="fa fa-trash text-danger"></i></button>

                        </form>
                    </td>

                    </tr>
                    @endforeach 
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

