    @extends('partials.layouts.datatablemaster')
@section('content')
<div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row pt-5">
          <div class="col-12">
            <div class="card">

              <div class="card-header">
                <h3 class="card-title">Inventry</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example11" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No#</th>
                    <th>Product Name</th>
                    <th>Qunatity</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($inventry as $key => $in)
                  <tr>
                    
                    <td>{{++$key}}</td>
                    <td>{{App\Models\VendorProduct::where('id',$in->product_id)->first()->product}}</td>
                    <td>{{$in->qty}}</td>
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
