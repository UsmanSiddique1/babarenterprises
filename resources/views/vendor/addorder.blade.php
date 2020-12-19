@extends('partials.layouts.datatablemaster')
@section('content')

<section class="content-wrapper">
      <div class="container-fluid">
         @if (session('status'))
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
        </div>
    @endif
        <div class="row justify-content-center align-items-center pt-3">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Vendor Order</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="insertvendororder">
                @csrf
                <div class="card-body">
                  <div class="row">
                  
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Vendor</label>
                    <!-- <input type="text" class="form-control"  placeholder=" Brand Name" name="cname"> -->
                  <select class="form-control major" name="vendor_id">
                    <option value="" selected="">status</option>
                  @foreach($vendor as $ven)
                  <option value="{{$ven->id}}">{{$ven->vname}}</option>
                  @endforeach
                  </select>

                  </div>
                 
                </div>
                    <hr>
      <table class="table table-responsive w-100 d-block d-md-table">
        <thead>
          <tr>
            <th>Particular</th>
            <th>Qty</th>
            <th>Purchase Rate</th>
            <th>Sale Rate</th>
            <th>Amount</th>
            <th><a href="#" class="btn btn-info addRow3">Add</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            
              <td><input  class="form-control" type="text"  placeholder="Particular" name="particular[]"></td>
             <td><input  class="form-control" type="text"  placeholder="Qty" name="qty[]"></td>
              <td><input  class="form-control" type="text"  placeholder="Purchase Rate" name="prate[]"></td>
               <td><input  class="form-control" type="text"  placeholder="Sale Rate" name="srate[]"></td>
             <td><input  class="form-control" type="text"  placeholder="Amount" name="amount[]"></td>
            <td><a href="#" class="btn btn-danger remove">Remove</a></td>
            
          </tr>
        </tbody>
      </table>
      <hr>
      <div class="row">
                   
                    <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Total Bill</label>
                    <input type="text" class="form-control"  placeholder="Sub Total" name="bill">
                  </div>
                   
                </div>
                
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

 
  </section>

@endsection