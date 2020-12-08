@extends('partials.layouts.datatablemaster')
@section('content')
  
<div class="content-wrapper">
  <section class="content">
   <div class="container-fluid">
        <div class="row justify-content-center pt-3">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">View Department Detail</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="{{url('searchdpt')}}">
                @csrf
                <div class="card-body">
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Salect Major Department</label>
                    <select class="form-control major" name="mname">
                    <option value="" selected="">status</option>
                   @foreach($majordpt as $major)
                   <option value="{{$major->id}}">{{$major->dname}}</option>
                   @endforeach
                  </select>

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
      <div class="container-fluid">
        <div class="row pt-5">
          <div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title text-bold ">View Customer Detail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     
                   
                    <th>Sub Department</th>
                    <th>Phone No</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Edit</th>
                    <th>Delete</th>
                     

                    
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($sname as $key => $s)
                  <tr>

                    <td>{{$s->sname}}</td>
                    <td>{{$s->phoneno}}</td>
                    <td>{{$s->email}}</td>
                    <td>{{$s->address}}</td>
                    <td>@include('partials.Modal.editdpt')</td>
                    <td><a href="{{url('deletesdpt/'.$s->id)}}" class="btn btn-danger">Delete</a></td>
                    
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