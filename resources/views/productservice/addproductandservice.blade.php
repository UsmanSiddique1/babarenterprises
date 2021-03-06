@extends('partials.layouts.datatablemaster')
@section('content')

<section class="content-wrapper">
      <div class="container-fluid">
        <div class="container-fluid pt-4">
      <h2><a href="{{route('viewservices')}}" class="btn btn-primary">View Product & Service</a></h2>
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
                <h3 class="card-title">Add Product & Service</h3>
              </div>
              
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="{{route('insertproducts')}}">
                @csrf
                <div class="card-body">
                  <div class="row align-items-center"> 
              <div class="form-group col-md-6 m-4 ">
                <label>Select Product & Category</label>
               <select class="form-control major" name="category_id">
                    <option value="" selected="">status</option>
                  @foreach($category as $cat)
                  <option value="{{$cat->id}}">{{$cat->category}}</option>
                  @endforeach
                  </select>
                </div>
              </div>
           <table class="table table-responsive w-100 d-block d-md-table">
        <thead>
          <tr>
            <th>Product & Service Name</th>
            <th><a href="#" onclick="event.preventDefault()" class="btn btn-info medicine">Add</a></th>
          </tr>
        </thead>
        <tbody class="medicine-tbody">
          <tr>
            <td><input  class="form-control" type="text"  placeholder="Product & Service Name" name="product[]"></td>
            <td><a href="#" onclick="event.preventDefault()" class="btn btn-danger medicine_remove">Remove</a></td>
            
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