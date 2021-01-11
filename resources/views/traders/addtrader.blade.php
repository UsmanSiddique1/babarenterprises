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
                <h3 class="card-title">Add Trader</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="inserttrader" enctype="multipart/form-data" >
                @csrf
                <div class="card-body">
                        <div class="row">   
                  <div class="form-group col-md-12">
                    <label for="exampleInputEmail1">Trader Logo</label>
                    <input type="file" class="form-control-file" name="image">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Trader Name</label>
                    <input type="text" class="form-control"  placeholder="Trader Name" name="tname">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="text" class="form-control"  placeholder="Phone No" name="phoneno">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control"  placeholder="Email" name="email">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control"  placeholder="Address" name="address">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Trader NTN</label>
                    <input type="text" class="form-control"  placeholder="Trader NTN" name="ntn">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Trader STRN</label>
                    <input type="text" class="form-control"  placeholder="Trader STRN" name="strn">
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