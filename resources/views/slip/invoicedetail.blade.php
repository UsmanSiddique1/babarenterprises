@extends('partials.layouts.datatablemaster')
@section('content')
  
<div class="content-wrapper">
  <section class="content">
   
      <div class="container-fluid">
        <div class="row pt-5">
          <div class="col-12">
                <div class="card">
              <div class="card-header">
                <h3 class="card-title text-bold ">View Invoice Detail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     <th>No#</th>
                    <th>Slip_id</th>
                    <th>Invoice No</th>
                     

                    
                    
                  
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($SlipInvoice as $key => $slip)
                  <tr>
                    <td>{{++$key}}</td>
                    <td>{{$slip->slip_id}}</td>
                    <td>Invoice# {{$slip->invoice_id}}</td>
                    
                    
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