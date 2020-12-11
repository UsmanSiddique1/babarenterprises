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
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Tax</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="{{url('inserttax')}}">
                @csrf
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tax Type</label>
                    <select class="form-control" name="taxtype">
                      <option value="" selected="selected">Select</option>
                      <option value="gsttax">GST Tax</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Percentage</label>
                    <input type="text" class="form-control"  placeholder="Percentage" name="percentage">
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