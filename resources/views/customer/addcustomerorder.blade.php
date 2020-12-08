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
                <h3 class="card-title">Add Customer Order</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="insertcompany">
                @csrf
                <div class="card-body">
                  <div class="row">
                  
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Major Department</label>
                    <!-- <input type="text" class="form-control"  placeholder=" Brand Name" name="cname"> -->
                  <select class="form-control major" name="bname">
                    <option value="" selected="">status</option>
                    @foreach($majordpt as $major)
                   <option value="{{$major->id}}">{{$major->dname}}</option>
                   @endforeach
                  </select>

                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Sub Department</label>
                    <!-- <input type="text" class="form-control"  placeholder=" Brand Name" name="cname"> -->
                  <select class="form-control" name="bname">
                    <option value="" selected="">status</option>
                   <option>A</option>
                   <option>B</option>
                   <option>C</option>
                  </select>

                  </div>
                </div>
                    <hr>
      <table class="table table-responsive w-100 d-block d-md-table">
        <thead>
          <tr>
            <th>Particular</th>
            <th>Qty</th>
            
            <th><a href="#" class="btn btn-info addRow2">Add</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            
             <td><select class="form-control"  style="width: auto;" name="category[]">
               <option value="" selected="">status</option>
              <option>Sofa</option>
              <option>Chair</option>
              <option>Set</option>
            </select></td>
             <td><input  class="form-control" type="text"  placeholder="Qty" name="qty[]" style="width: auto;"></td>
             
            
            <td><a href="#" class="btn btn-danger remove">Remove</a></td>
            
          </tr>
        </tbody>
      </table>
      <hr>
      <div class="row">
                   <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Delivered Date</label>
                    <input type="date" class="form-control"  placeholder="Delivered Date" name="phoneno">
                  </div>
                    <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Tax</label>
                    <!-- <input type="text" class="form-control"  placeholder="GST" name="phoneno"> -->
                     <select class="form-control" name="bname">
                    <option value="" selected="">status</option>
                   <option>A</option>
                   <option>B</option>
                   <option>C</option>
                  </select>
                  </div>
                    <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Sub Total</label>
                    <input type="text" class="form-control"  placeholder="Sub Total" name="phoneno">
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