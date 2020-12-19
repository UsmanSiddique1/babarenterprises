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
                <h3 class="card-title">Create Assistant</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="insertvendor">
                @csrf
                <div class="card-body">
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Name</label>
                    <input type="text" class="form-control"  placeholder="Name" name="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control"  placeholder="Email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="number" class="form-control"  placeholder="Phone Number" name="email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" class="form-control"  placeholder="Password" name="address">
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