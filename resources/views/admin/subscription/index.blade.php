
@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')
            <div class="card">
            
              <!-- /.card-header -->
              <div class="page-breadcrumb bg-white">

                <div class="row align-items-center">
        
                    <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12 pull-left">
        
                        <h4 class="page-title">Membership Plan </h4>
        
                    </div>
        
                    <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12 pull-right">
                    
                        
                        <div class="d-md-flex ">
        
                            <!-- <ol class="breadcrumb ms-auto">
        
                           <li><a href="#" class="fw-normal">Dashboard</a></li>
        
                           </ol> -->
        
                            <a class="btn btn-success" style="text-align:right; width:75px; margin-left: 133px;" href="{{ route('addsubs.create') }}">Add</a>
        
                        </div>
                   
                    </div>
        
                </div>
        
                <!-- /.col-lg-12 -->
        
            </div>
        
              <div class="card-body">
                    
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S no</th>
                    <th> Title </th>
                    <th> Price </th>
                    <th> Discount Price </th>
                      <th> No of Events </th>
                     <th>Plan Validity </th>
                     <th>Plan Descriptions</th>
                     <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($subscription as $key => $temp)
                      
                   
                    <tr>
                      <td>{{ ++$key }}</td>
                      <td>{{ $temp->plan }}</td>
                      <td>{{ $temp->price }}</td>
                       <td>{{ $temp->result }}</td>
                        <td>{{ $temp->no_of_event }}</td>
                      <td>{{ $temp->plan_validity }}</td>
                      <td>{{ $temp->des }}</td>
                      <td>
                       
    
                        <a href="{{ route('addsubs.edit', $temp->id) }}"

                            title="Edit"><i class="fa fa-edit text-success"></i></a> 
                           

                        &nbsp;
                        <form action="{{ route('addsubs.destroy', $temp->id) }}"

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

