@extends('partials.layouts.datatablemaster')
@section('content')
<section class="content-wrapper">
      <div class="container-fluid">
         @if (session('status'))
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
        </div>
    @endif
        <div class="row justify-content-center align-items-center pt-3">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Slip</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="insertslip">
                @csrf
                <div class="card-body">
                 <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Customer Name</label>
                   <select class="form-control major customer" name="customer_id">
                     <option value="">Select</option>
                     @foreach($customer as $cus)
                      <option value="{{$cus->id}}">{{$cus->cname}}</option>
                     @endforeach
                   </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Customer Invoice</label>
                    <select class="form-control cinvoice" name="cinvoice[]" multiple="true">
                    <option>Select </option>
                  </select>
                  </div>
                <!--   <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Invoice Bill</label>
                    <input type="text" class="form-control"  placeholder="Invoice Bill" name="email">
                  </div> -->
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">PST Tax</label>
                    <input type="text" class="form-control"  placeholder="PST Tax" name="psttax">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Income Tax</label>
                    <input type="text" class="form-control"  placeholder="Income Tax" name="incometax">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">GOVT Return Bill</label>
                    <input type="text" class="form-control"  placeholder="GOVT Return Bill" name="gslip">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Check Number</label>
                    <input type="text" class="form-control"  placeholder="Check Number" name="cnumber">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Check Date</label>
                    <input type="date" class="form-control" name="cdate">
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


 </section>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/0.10.0/lodash.min.js"></script>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<script type="text/javascript">
    $(document).ready(function(){

            $('.customer').change(function() {

              console.log("working");
          $('.cinvoice').html('')
          let dist = {!! json_encode($invoicedetail->toArray(), JSON_HEX_TAG) !!};

          
          _.forEach(dist, function(value, key) {
            if(value.customer_id === $('.customer').children("option:selected").val()) {
              $('.cinvoice').append('<option id='+value.id+' value='+value.id+'>Invoice# '+value.id+'</option>');
            }
          });
         });



    });
</script>
@endsection
