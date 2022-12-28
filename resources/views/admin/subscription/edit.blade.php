@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')

    <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title"> Membership Plan</h3>
        </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('addsubs.update',$subscription->id) }}" method="POST">
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" value="{{ $subscription->plan }}" name="plan" class="form-control" id="exampleInputEmail1" placeholder="Title">
        </div>
       <div class="form-group">
                              <label class="label_field">Price</label>
                          <input type="number" name="price" id="price"  class="form-control" value="{{$subscription->price}}" placeholder="Price" />
                           </div>
                          
                           <div class="form-group field discount">
                              <label class="label_field">Discount(%)</label>
                              <input type="number" name="discount" id="discount"  class="form-control" value="{{$subscription->discount}}" onkeyup="total()" placeholder="Discount" />
                           </div>
                     
                           <div class="form-group field total_amount">
                              <label class="label_field">Total Amount</label>
                              <input class="form-control"type="hidden" name="result" id="result">

                              <!-- Create read only  text input field  and put the total value onkeyup the Quantity field to display -->
                              <input class="form-control" type="number"  value="{{$subscription->result}}" id="show_result"  readonly>
                              </div>
<div class="form-group">
            <label for="exampleInputPassword1">No Of Events</label>
            <input type="text" value="{{ $subscription->no_of_event }}" name="no_of_event" class="form-control" id="exampleInputPassword1" placeholder="No Of Event">
          </div>
           <div class="form-group">
            <label for="exampleInputPassword1">Plan Validity(In Days)</label>
            <input type="text" name="plan_validity" value="{{ $subscription->plan_validity }}" class="form-control" id="exampleInputPassword1" placeholder="Days">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Event Plan Description</label>
            <input type="text"  value="{{ $subscription->des }}" name="des" class="form-control" id="exampleInputPassword1" placeholder="Plan Description">
          </div>
         
        
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-danger">Submit</button>
      </div>
    </form>
  </div>
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






