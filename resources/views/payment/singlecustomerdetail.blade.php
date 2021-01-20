@extends('partials.layouts.datatablemaster')
@section('content')
  
<div class="content-wrapper">
  <section class="content">
   
      <div class="container-fluid">
        <div class="row pt-5">
          <div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title text-bold ">Single Customer Payment Dtail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Invoice#</th>
                    <th>Customer Name</th>
                    <th> Major Department</th>
                    <th>Sub Department</th>
                    <th>Invoice No</th>
                    <th>Status</th>
                    <th>More</th>
                     

                    
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($invoice as $key => $in)
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{App\Models\Customer::where('id',$in->customer_id)->first()->cname}}</td>
                     <td>{{App\Models\MajorDepartment::where('id',$in->mdpt_id)->first()->dname}}</td>
                     <td>{{App\Models\SubDepartment::where('id',$in->sdpt_id)->first()->sname}}</td>
                     <td>{{$in->id}}</td>
                     <td>{{$in->status}}</td>
                     <td><a href="{{url('viewinvoice/'.$in->id)}}" class="btn btn-primary">View Invoice</a></td>
                     
                     
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