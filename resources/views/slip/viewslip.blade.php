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
                <h3 class="card-title">View Slip Detail</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{url('serachvendor')}}" method="post">
                @csrf
                <div class="card-body">
                 <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Salect Customer Name</label>
                    <select class="form-control major" name="vendor_id">
                    <option value="" selected="">status</option>
                    
                  
              
                  </select>

                  </div>
                   <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Salect Customer Invoice</label>
                    <select class="form-control major" name="vendor_id">
                    <option value="" selected="">status</option>
                  
                  </select>

                  </div>
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
                <h3 class="card-title text-bold ">View Slip Detail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Qty#</th>
                     <th>Customer Name</th>
                     <th>Customer Invoice</th>
                     <th>Invoice Bill</th>
                     <th>PST Tax</th>
                     <th>Income Tax</th>
                     <th>GOVT Return Bill</th>
                    
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                   
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
              
                
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