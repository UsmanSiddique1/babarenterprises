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
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Customer Order</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="insertcompany">
                @csrf
                <div class="card-body">
                  <div class="row">
                   <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Customer Name</label>
                     <select class="form-control major mname" name="mname">
                    <option value="" selected="">status</option>
                    @foreach($majordpt as $major)
                   <option value="{{$major->id}}">{{$major->dname}}</option>
                   @endforeach
                  </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Major Department</label>
                    <!-- <input type="text" class="form-control"  placeholder=" Brand Name" name="cname"> -->
                  <select class="form-control major mname" name="mname">
                    <option value="" selected="">status</option>
                    @foreach($majordpt as $major)
                   <option value="{{$major->id}}">{{$major->dname}}</option>
                   @endforeach
                  </select>

                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Sub Department</label>
                    <!-- <input type="text" class="form-control"  placeholder=" Brand Name" name="cname"> -->
                  <select class="form-control sname" name="sname">
                      <option>Select </option>              
                   
                  </select>

                  </div>
                  
                </div>
                    <hr>
      <table class="table table-responsive w-100 d-block d-md-table">
        <thead>
          <tr>
            <th>Particular</th>
            <th>Qty</th>
            
            <th><a href="#" class="btn btn-info addRow2">Add</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            
             <td><select class="form-control"  style="width: auto;" name="category[]">
               <option value="" selected="">status</option>
              <option>Sofa</option>
              <option>Chair</option>
              <option>Set</option>
            </select></td>
             <td><input  class="form-control" type="text"  placeholder="Qty" name="qty[]" style="width: auto;"></td>
             
            
            <td><a href="#" class="btn btn-danger remove">Remove</a></td>
            
          </tr>
        </tbody>
      </table>
      <hr>
      <div class="row">
                   <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Delivered Date</label>
                    <input type="date" class="form-control"  placeholder="Delivered Date" name="phoneno">
                  </div>
                    <div class="form-group col-md-4">
                    <label for="exampleInputEmail1"> GST Tax</label>
                    <!-- <input type="text" class="form-control"  placeholder="GST" name="phoneno"> -->
                     <select class="form-control" name="bname">
                    <option value="" selected="">Option</option>
                    <option value="17">Apply GST</option>
                    <option value="0">Not Apply GST</option>
                  </select>
                  </div>
                  
                    <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Sub Total</label>
                    <input type="text" class="form-control"  placeholder="Sub Total" name="phoneno">
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

            $('.mname').change(function() {

              console.log("working");
          $('.sname').html('<option disabled selected>=== Select PO ===</option>')
          let dist = {!! json_encode($subdpt->toArray(), JSON_HEX_TAG) !!};

          console.log(dist);

          
          _.forEach(dist, function(value, key) {
            if(value.mdpt_id === $('.mname').children("option:selected").val()) {
              $('.sname').append('<option id='+value.id+' value='+value.sname+'>'+value.sname+'</option>');
            }
          });
         });



    });
</script>
@endsection