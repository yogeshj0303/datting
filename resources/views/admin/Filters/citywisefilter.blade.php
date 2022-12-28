
@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">CITY WISE DATA</h3>
              </div>
              <!-- /.card-header -->
              <div class="page-breadcrumb bg-white">

               
                <!-- /.col-lg-12 -->
        
            </div>
    
              <div class="card-body">
                    
                <table id="example1" class="table table-bordered table-striped">
                  <thead style="background-color: darkred; color: white;">

                        <tr>


                            <th> City</th>

                            <th colspan="2">Total</th>
                            <th colspan="2">LIVE</th>
                            <th colspan="2">New Paid Users</th>
                            <th colspan="2">Unpaid Users</th>
                            
                        </tr>
                        <tr>
                          
                            
                            <th></th>
                            <th>Man</th>
                             <th>Woman</th>
                              <th>Man</th>
                             <th>Woman</th>
                              <th>Man</th>
                             <th>Woman</th>
                              <th>Man</th>
                             <th>Woman</th>
                        </tr>
                    
                    </thead>
                    <tbody style="background-color: antiquewhite">
                    @foreach($city as  $temp)
                            <tr>
                            
                            <td>{{$temp->locate}}</td>
                            <td>{{$temp->cman}}</td>
                            <td>{{$temp->cwoman}}</td>
                            <td>3000</td>
                            <td>3000</td>
                            <td>{{$temp->cpaidman}}</td>
                            <td>{{$temp->cpaidwoman}}</td>
                            <td>{{$temp->cunpaidman}}</td>
                            <td>{{$temp->cunpaidwoman}}</td>
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

