
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
 <?php
 $city = DB::table('cities')->get();
 ?>
              <div class="card-body">
                  
                     <form method="post" action="/citydata">
                         @csrf
                          <div class="col-sm-6">
                     <div class="form-group">
                        <label>Search By City</label>
                        <select class="form-control" name="locate" required>
                             <option value="">--Select City--</option>
                       @foreach($city as $temp)
                          <option  value="{{$temp->city}}">{{$temp->city}}</option>
                          <!--<option  value="thane">thane</option>-->
                        @endforeach
                          <!--<option>option 2</option>-->
                          <!--<option>option 3</option>-->
                          <!--<option>option 4</option>-->
                          <!--<option>option 5</option>-->
                        </select>
                      </div>
                      <!--<input type="date" name="from" class="form-control"/>To <input type="date" name="to" class="form-control"/>-->
                       <button class="btn btn-primary" type="submit">Search  </button>
                      </div>
               </form>
               
             
              </div>
                
               <form method="post" action="/searchdata">
                         @csrf
                          <div class="col-sm-6">
                    
                      <input type="date" name="from" class="form-control" required/>To <input type="date" name="to" class="form-control" required/>
                       
                      </div>
                
       
              </div>
                <button class="btn btn-primary" style="width: 88px;
    margin-left: 25px;" type="submit">Search  </button>
              </form>
       
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
            
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      
      
    <!-- Row -->

      <!-- /.container-fluid -->
    </section>

<!-- ./wrapper -->

@endsection

