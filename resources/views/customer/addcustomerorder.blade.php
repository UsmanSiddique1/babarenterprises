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
            <h5 style="background:red">
             @if($errors)
                {{$errors}}
           @endif
           </h5>
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Customer Order</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="insertinvoice">
                @csrf
                <div class="card-body">

                  <div class="row justify-content-center mb-5 ">
                    <div class="col-md-4 border p-3 shadow">
                    <label>Trader Name</label>
                    <select class="form-control major" name="trade_name">
                    <option value="" selected="">Select</option>
                    @foreach($trader as $tr)
                    <option value="{{$tr->id}}">{{$tr->tname}}</option>
                   @endforeach
                  </select>
                </div>
                  </div>
                  <hr>
                  <div class="row">
                   <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Customer Name</label>
                     <select class="form-control major" name="customer_id">
                    <option value="" selected="">status</option>
                    @foreach($customer as $cus)
                   <option value="{{$cus->id}}">{{$cus->cname}}</option>
                   @endforeach
                  </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Major Department</label>
                    <!-- <input type="text" class="form-control"  placeholder=" Brand Name" name="cname"> -->
                  <select class="form-control mname major" name="mdpt_id">
                    <option value="">status</option>
                    @foreach($majordpt as $major)
                   <option value="{{$major->id}}">{{$major->dname}}</option>
                   @endforeach
                  </select>

                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputEmail1">Sub Department</label>
                    <!-- <input type="text" class="form-control"  placeholder=" Brand Name" name="cname"> -->
                  <select class="form-control sname " name="sdpt_id">
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
            <th>Amount</th>
            
            <th><a href="#" class="btn btn-info addRow2" onclick="event.preventDefault()">Add</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            
             <td><select class="form-control major1"   name="particular[]">
               <option value="" selected="">status</option>
              @foreach($particular as $for)

                <option>{{$for->particular}}</option>

              @endforeach
            </select></td>
             <td><input  class="form-control" type="text"  placeholder="Qty" name="qty[]" ></td>
             <td><input  class="form-control" type="text"  placeholder="amount" name="amount[]" ></td>
             
            
            <td><a href="#" class="btn btn-danger remove" onclick="event.preventDefault()">Remove</a></td>
            
          </tr>
        </tbody>
      </table>
      <hr>
      <div class="row">
        <div class="form-group col-md-3">
                    <label for="exampleInputEmail1"> GST Tax</label>
                    <!-- <input type="text" class="form-control"  placeholder="GST" name="phoneno"> -->
                     <select class="form-control" name="gsttax">
                    <option value="" selected="">Option</option>
                    <option value="17">Apply GST</option>
                    <option value="0">Not Apply GST</option>
                  </select>
                  </div>
                   <div class="form-group col-md-3">
                    <label for="exampleInputEmail1"> PST Tax</label>
                    <!-- <input type="text" class="form-control"  placeholder="GST" name="phoneno"> -->
                     <select class="form-control" name="psttax">
                    <option value="" selected="">Option</option>
                    <option value="16">Apply PST</option>
                    <option value="0">Not Apply PST</option>
                  </select>
                  </div>
                   <div class="form-group col-md-3">
                    <label for="exampleInputEmail1"> Income Tax</label>
                    <!-- <input type="text" class="form-control"  placeholder="GST" name="phoneno"> -->
                     <select class="form-control" name="incometax">
                    <option value="" selected="">Option</option>
                    <option value="4.5">Apply Income</option>
                    <option value="0">Not Apply Income</option>
                  </select>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="exampleInputEmail1"> Punjab Income Tax</label>
                    <!-- <input type="text" class="form-control"  placeholder="GST" name="phoneno"> -->
                     <select class="form-control" name="punjabincometax">
                    <option value="" selected="">Option</option>
                    <option value="10">Apply punjab Income Tax</option>
                    <option value="0">Not Apply punjab Income Tax</option>
                  </select>
                  </div>
      </div>
      <div class="row">
                   <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Delivered Date</label>
                    <input type="date" class="form-control"  placeholder="Delivered Date" name="ddate">
                  </div>
                    
                  
                    <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Sub Total</label>
                    <input type="text" class="form-control"  placeholder="Sub Total" name="subtotal">
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



$('.addRow2').on('click', function(){
     
     addRow3();
  });
  function addRow3(){

    var tr ='<tr>'+ 
            
             
             
             '<td><select class="form-control major1"   name="particular[]">'+
               '<option value="" selected="">status</option>'+
              '@foreach($particular as $for)'+

                '<option>{{$for->particular}}</option>'+

              '@endforeach'+
            '</select></td>'+
                        '<td><input  class="form-control" type="text"  placeholder="Qty" name="qty[]"></td>'+
                     '<td><input  class="form-control" type="text"  placeholder="amount" name="amount[]" ></td>'+
                                                 
            '<td><a href="#" class="btn btn-danger remove" onclick="event.preventDefault()">Remove</a></td>'+
            
          '</tr>';
          $('tbody').append(tr); 
  };

  $('tbody').on('click', '.remove', function(){
       $(this).parent().parent().remove();

  });


    $(document).ready(function(){
      

            $('.mname').change(function() {

              var mname = $('.mname').val();

              // alert(mname);

                 // var selectedCountry = $(this).children("option:selected").val();
                 // alert(selectedCountry);
               // alert($('#mname :selected').val());

                
            //  console.log("working");
          

          $('.sname').html('<option disabled selected>=== Select PO ===</option>')
          let dist = {!! json_encode($subdpt->toArray(), JSON_HEX_TAG) !!};

        //  console.log(dist);

          
          _.forEach(dist, function(value, key) {
           //console.log(value.mdpt_id);          
       
            if(value.mdpt_id == mname)              
            {
              console.log("working");
                
              $('.sname').append('<option id='+value.id+' value='+value.id+'>'+value.sname+'</option>');
            }
            else
            {

             console.log("jj");
            }

          });
         });



    });
</script>
@endsection