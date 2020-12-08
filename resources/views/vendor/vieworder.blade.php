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
                <h3 class="card-title">View Customer Order</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{url('serachvendor')}}" method="post">
                @csrf
                <div class="card-body">
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Salect Vendor Name</label>
                    <select class="form-control major" name="vendor_id">
                    <option value="" selected="">status</option>
                    @foreach($vendor as $ven)
                  <option value="{{$ven->id}}">{{$ven->vname}}</option>
                  @endforeach
                  </select>

                  </div>
                  
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
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
                <h3 class="card-title text-bold ">View Vendor Order</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Qty#</th>
                     <th>Date</th>
                     <th>Vendor Name</th>
                     <th>Total Bill</th>
                     <th>More</th>
                     

                    
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($detail as $key => $de)
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{$de->created_at}}</td>
                    <td>{{App\Models\Vendor::where('id',$de->vendor_id)->first()->vname}}</td>
                    <td>{{App\Models\VendorBill::where('id',$de->bill_id)->first()->bill}}</td>
                    <td></td>
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