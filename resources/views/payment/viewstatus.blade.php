@extends('partials.layouts.datatablemaster')
@section('content')
  
<div class="content-wrapper">
  <section class="content">
   
      <div class="container-fluid">
        <div class="row pt-5">
          <div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title text-bold ">View Payment Dtail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No#</th>
                    <th>Customer Name</th>
                    <th>Total Payment</th>
                    <th>Remaing</th>
                  
                    <th>Status</th>
                    <th>More</th>
                     

                    
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($payment as $key => $pay)
                  <tr>
                    <td>{{++$key}}</td>
                     <td>{{App\Models\Customer::where('id',$pay->customer_id)->first()->cname}}</td>
                     <td>{{$pay->total_payment}}</td>
                     <td>{{$pay->remaing_payment}}</td>
                     <td>{{$pay->status}}</td>
                     <td><a href="{{url('singlecustomer/'.$pay->customer_id)}}" class="btn btn-primary">Detail</a></td>
                     
                     
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