@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')
    <!-- ============================================================== -->

    <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">Plan Membership</h3>
        </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('addsubs.store') }}" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Plan Name</label>
          <input type="text" name="plan" class="form-control" id="exampleInputEmail1" placeholder="Title">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Price</label>
          <!--<input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="Price">-->
           <input type="number" name="price" id="price" class="form-control price" placeholder="Price" required/>
        <!--</div>-->
        <!-- <div class="form-group">-->
        <!--  <label for="exampleInputPassword1">Discount</label>-->
        <!--  <input type="text" name="discount" class="form-control" id="exampleInputPassword1" placeholder="Discount">-->
        <!--</div>-->
        </div>
           <div class="form-group">
                              <label for="label_field">Discount(%)</label>
                              <input type="number" name="discount" value="0" class="form-control" id="discount" onkeyup="total()" placeholder="Discount" />
                           </div>
                     
                          <div class="form-group">
                              <label class="label_field">Total Amount</label>
                              <input class="form-control" value="0" type="hidden" name="result" id="result>
                              </div>
                            <div class="form-group">
                              <!-- Create read only  text input field  and put the total value onkeyup the Quantity field to display -->
                              <input class="form-control" name="result" value="0" type="number" id="show_result"  readonly>
                              </div>

        
        <div class="form-group">
            <label for="exampleInputPassword1">No Of Events</label>
            <input type="text" name="no_of_event" value="0" class="form-control" id="exampleInputPassword1" placeholder="No Of Event">
          </div>
           <div class="form-group">
            <label for="exampleInputPassword1">Plan Validity(In Days)</label>
            <input type="text" name="plan_validity" class="form-control" id="exampleInputPassword1" placeholder="Days">
          </div>
        <!--<div class="form-group">-->
        <!--    <label for="exampleInputPassword1">Validity From</label>-->
        <!--    <input type="date" name="validityfrom" class="form-control" id="exampleInputPassword1" placeholder="FROM">-->
        <!--  </div>-->
        <!--  <div class="form-group">-->
        <!--    <label for="exampleInputPassword1">Validity To</label>-->
        <!--    <input type="date" name="validityto" class="form-control" id="exampleInputPassword1" placeholder="TO">-->
        <!--  </div>-->
          <div class="form-group">
            <label for="exampleInputPassword1"> Plan Description</label>
            <input type="text" name="des" class="form-control" id="exampleInputPassword1" placeholder="Plan Description">
          </div>
         
        
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
 <script src="js/custom.js"></script>

      <script>


         function total() {
      var discount = parseInt(document.getElementById('discount').value);
      var price = parseInt(document.getElementById('price').value);
      
      var total = price - (price * discount)/100;
    
      document.getElementById('show_result').value = total;
      document.getElementById('result').value = total;
    }
    
    </script>
@endsection

