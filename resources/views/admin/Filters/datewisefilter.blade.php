
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
   <div style="margin-left: 495px;"><h3>{{$cityName}}</h3></div>
              <div class="card-body">
                    
                <table id="example1" class="table table-bordered table-striped">
                  <thead style="background-color: darkred; color: white;">
                        <tr>


                            <th> Date</th>

                            <th colspan="2">Total</th>
                            <th colspan="2">LIVE</th>
                            <th colspan="2">New Paid Users</th>
                            <th colspan="2">Unpaid Users</th>
                            
                        </tr>
                        <tr>
                             <th></th>    
                            <!--<th></th>-->
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
                         
                      
                            <tr>
                            
                            <td>{{$dates[0]}}</td>
                            <td>{{$mandata[0]}}</td>
                            <td>{{$womandata[0]}}</td>
                            <td>3000</td>
                            <td>3000</td>
                             <td>{{$manpaiddata[0]}}</td>
                            <td>{{$manpaiddata[0]}}</td>
                            <td>{{$manunpaiddata[0]}}</td>
                            <td>{{$womanunpaiddata[0]}}</td>
                        </tr>
                    
                         <tr>
                         
                            
                            <td>{{$dates[1]}}</td>
                            <td>{{$mandata[1]}}</td>
                            <td>{{$womandata[1]}}</td>
                            <td>3000</td>
                            <td>3000</td>
                             <td>{{$manpaiddata[1]}}</td>
                            <td>{{$manpaiddata[1]}}</td>
                            <td>{{$manunpaiddata[1]}}</td>
                            <td>{{$womanunpaiddata[1]}}</td>
                        </tr>
                          <tr>
                           
                            <td>{{$dates[2]}}</td>
                            <td>{{$mandata[2]}}</td>
                            <td>{{$womandata[2]}}</td>
                            <td>3000</td>
                            <td>3000</td>
                             <td>{{$manpaiddata[2]}}</td>
                            <td>{{$manpaiddata[2]}}</td>
                           <td>{{$manunpaiddata[2]}}</td>
                            <td>{{$womanunpaiddata[2]}}</td>
                        </tr>
                        
                          <tr>
                           
                            <td>{{$dates[3]}}</td>
                            <td>{{$mandata[3]}}</td>
                            <td>{{$womandata[3]}}</td>
                            <td>3000</td>
                            <td>3000</td>
                             <td>{{$manpaiddata[3]}}</td>
                            <td>{{$manpaiddata[3]}}</td>
                          <td>{{$manunpaiddata[3]}}</td>
                            <td>{{$womanunpaiddata[3]}}</td>
                        </tr>
                          <tr>
                           
                            <td>{{$dates[4]}}</td>
                            <td>{{$mandata[4]}}</td>
                            <td>{{$womandata[4]}}</td>
                            <td>3000</td>
                            <td>3000</td>
                             <td>{{$manpaiddata[4]}}</td>
                            <td>{{$manpaiddata[4]}}</td>
                            <td>{{$manunpaiddata[4]}}</td>
                            <td>{{$womanunpaiddata[4]}}</td>
                        </tr>
                          <tr>
                           
                            <td>{{$dates[5]}}</td>
                            <td>{{$mandata[5]}}</td>
                            <td>{{$womandata[5]}}</td>
                            <td>3000</td>
                            <td>3000</td>
                            <td>{{$manpaiddata[5]}}</td>
                            <td>{{$manpaiddata[5]}}</td>
                            <td>{{$manunpaiddata[5]}}</td>
                            <td>{{$womanunpaiddata[5]}}</td>
                        </tr>
                          <tr>
                            
                            <td>{{$dates[6]}}</td>
                            <td>{{$mandata[6]}}</td>
                            <td>{{$womandata[6]}}</td>
                            <td>3000</td>
                            <td>3000</td>
                            <td>{{$manpaiddata[6]}}</td>
                            <td>{{$manpaiddata[6]}}</td>
                            <td>{{$manunpaiddata[6]}}</td>
                            <td>{{$womanunpaiddata[6]}}</td>
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

