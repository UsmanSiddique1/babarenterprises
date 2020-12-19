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
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Slip</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="insertvendor">
                @csrf
                <div class="card-body">
                 <div class="row">
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Customer Name</label>
                   <select class="form-control">
                     <option>Select</option>
                   </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Customer Invoice</label>
                    <select class="form-control">
                     <option>Select</option>
                   </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Invoice Bill</label>
                    <input type="email" class="form-control"  placeholder="Invoice Bill" name="email">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">PST Tax</label>
                    <input type="text" class="form-control"  placeholder="PST Tax" name="address">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Income Tax</label>
                    <input type="text" class="form-control"  placeholder="Income Tax" name="address">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">GOVT Return Bill</label>
                    <input type="text" class="form-control"  placeholder="GOVT Return Bill" name="address">
                  </div>
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