@extends('partials.layouts.datatablemaster')
@section('content')
  
<div class="content-wrapper">
  <section class="content">

      <div class="container-fluid">
        <div class="row pt-5">
          <div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title text-bold ">View Trader Detail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Qty#</th>
                     <th>Logo</th>
                     <th>Trader Name</th>
                     <th>Phone No</th>
                     <th>Email</th>
                     <th>NTN</th>
                     <th>STRN</th>
                     <th>Edit</th>
                     <th>Delete</th>

                    
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($traders as $key => $de)
                  <tr>
                    <td>{{++$key}}</td>
                    <td><img src="{{asset('image/'.$de->image)}}" height="40%" width="40%"></td>
                    <td>{{$de->tname}}</td>
                    <td>{{$de->phoneno}}</td>
                    <td>{{$de->email}}</td>
                    <td>{{$de->ntn}}</td>
                    <td>{{$de->strn}}</td>
                    <td>@include('partials.Modal.edittrader')</td>
                    <td><a href="{{url('delete/'.$de->id)}}" class="btn btn-danger">Delete</a></td>
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