@extends('partials.layouts.datatablemaster')
@section('content')
<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid pt-4">
      <h2><a href="{{route('addproducts')}}" class="btn btn-primary">Add Product & Service</a></h2>
    </div>
      <div class="container-fluid pt-3">
        <div class="row">
          <div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title text-bold ">View Product & Service</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>

                    <th>product#</th>
                     <th>Product & Service Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                    
                  
                  </tr>
                  </thead>
                  <tbody>

                    @foreach($medicines as $key => $med)
                  <tr>
                   
                   
                     <td>{{++$key}}</td>
                     <td>{{$med->product}}</td>
                     <td>@include('partials.Modal.editproduct')</td>
                   <td><a href="{{url('deleteservice/'.$med->id)}}" class="btn btn-danger">Delete</a></td>
                     
                    
                  </tr>
                 @endforeach
                
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
                </div>
            </div>
            </div>
            </div>


           
    </section>
</div>
 

@endsection