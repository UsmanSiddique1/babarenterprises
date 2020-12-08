@extends('partials.layouts.datatablemaster')
@section('content')
  
<div class="content-wrapper">
  <section class="content">
   
      <div class="container-fluid">
        <div class="row pt-5">
          <div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title text-bold ">View Vendor Detail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     
                     <th>Vendor Name</th>
                    <th>Phone No</th>
                    <th>Email</th>
                     <th>Address</th>
                    <th>Edit</th>
                     <th>Delete</th>
                     

                    
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($vendor as $key => $cus)
                  <tr>
                    <td>{{$cus->vname}}</td>
                    <td>{{$cus->phoneno}}</td>
                    <td>{{$cus->email}}</td>
                    <td>{{$cus->address}}</td>
                    <td><a href="{{url('editvendor/'.$cus->id)}}" class="btn btn-primary">Edit</a></td>
                    <td><a href="{{url('deletevendor/'.$cus->id)}}" class="btn btn-danger">Delete</a></td>
                    
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