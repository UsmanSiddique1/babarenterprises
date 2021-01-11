@extends('partials.layouts.datatablemaster')
@section('content')

<section class="content-wrapper">
      <div class="container-fluid">
        <div class="container-fluid pt-4">
      <h2><a href="{{route('viewcategorys')}}" class="btn btn-primary">View Product & Category Name</a></h2>
    </div>
         
        <div class="row justify-content-center align-items-center pt-3">
          <!-- left column -->
          <div class="col-md-8">
            @if (session('status'))
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
        </div>
    @endif
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header bg-primary " >
                <h3 class="card-title">Add Product & Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="{{route('insertcategorys')}}">
                @csrf
                <div class="card-body">
           <table class="table table-responsive w-100 d-block d-md-table">
        <thead>
          <tr>
            <th>Product & Category Name</th>
            <th><a href="#" onclick="event.preventDefault()" class="btn btn-info medicine1">Add</a></th>
          </tr>
        </thead>
        <tbody class="medicine1-tbody">
          <tr>
            <td><input  class="form-control" type="text"  placeholder="Product & Category Name" name="category[]"></td>
            <td><a href="#" onclick="event.preventDefault()" class="btn btn-danger medicine1_remove">Remove</a></td>
            
          </tr>
        </tbody>
      </table>
      <hr>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

 
  </section>




@endsection