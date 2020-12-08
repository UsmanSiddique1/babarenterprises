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
                <h3 class="card-title">Add Customer</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="{{url('editcustomer1')}}">
                @csrf
                <div class="card-body">
                 
                  <div class="form-group">

                    <input type="hidden" name="id" value="{{$edit->id}}">


                    <label for="exampleInputEmail1">Customer Name</label>
                    <input type="text" class="form-control" name="cname" value="{{$edit->cname}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone No</label>
                    <input type="text" class="form-control"   name="phoneno" value="{{$edit->phoneno}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control"  value="{{$edit->email}}" name="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control"  value="{{$edit->address}}" name="address">
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