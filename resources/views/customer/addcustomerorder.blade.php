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
            
             <td><select class="form-control rate "   name="particular[]">
               <option value="" selected="">status</option>
              @foreach($particular as $for)

                <option  data-quantitys="{{App\Models\Inventry::where('id',$for->product_id)->first()->qty}}" data-value="{{App\Models\VendorService::where('particular',$for->product_id)->first()->srate}}" value="{{App\Models\VendorProduct::where('id',$for->product_id)->first()->id}}">{{App\Models\VendorProduct::where('id',$for->product_id)->first()->product}}</option>

              @endforeach
            </select></td>
             <td><input  class="form-control quantity" type="text"  placeholder="Qty" name="qty[]" ></td>
             <td><input  class="form-control amount" type="text"  placeholder="amount" name="amount[]" ></td>
             
            
            <td><a href="#" class="btn btn-danger remove" onclick="event.preventDefault()">Remove</a></td>
            
          </tr>
        </tbody>
      </table>
      <hr>
      <div class="row">
        <div class="form-group col-md-3">
                    <label for="exampleInputEmail1"> GST Tax</label>
                    <!-- <input type="text" class="form-control"  placeholder="GST" name="phoneno"> -->
                     <select class="form-control gst" name="gsttax">
                    <option value="0">Not Apply GST</option>
                    <option value="17">Apply GST</option>
                    
                  </select>
                  </div>
                   <div class="form-group col-md-3">
                    <label for="exampleInputEmail1"> PST Tax</label>
                    <!-- <input type="text" class="form-control"  placeholder="GST" name="phoneno"> -->
                     <select class="form-control pst" name="psttax">
                    <option value="0">Not Apply PST</option>
                    <option value="16">Apply PST</option>
                   
                  </select>
                  </div>
                   <div class="form-group col-md-3">
                    <label for="exampleInputEmail1"> Income Tax</label>
                    <!-- <input type="text" class="form-control"  placeholder="GST" name="phoneno"> -->
                     <select class="form-control income" name="incometax">
                   <option value="0">Not Apply Income</option>
                    <option value="4.5">Apply Income</option>
                    
                  </select>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="exampleInputEmail1"> Punjab Income Tax</label>
                    <!-- <input type="text" class="form-control"  placeholder="GST" name="phoneno"> -->
                     <select class="form-control pincome" name="punjabincometax">
                    <option value="0">Not Apply punjab Income Tax</option>
                    <option value="10">Apply punjab Income Tax</option>
                    
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
                    <input type="text" class="form-control stotal"  placeholder="Sub Total" name="subtotal">
                  </div>
                   
                </div>
                <div class="row">
                   <div class="form-group col-md-6">
                    
                  </div>
                    
                  
                    <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Total</label>
                    <input type="text" class="form-control total"  placeholder="Total" name="subtotal">
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
            
             
             
             '<td><select class="form-control rate"   name="particular[]">'+
               '<option value="" selected="">status</option>'+
              ' @foreach($particular as $for)'+

                '<option data-value="{{App\Models\VendorService::where('particular',$for->product_id)->first()->srate}}" value="{{App\Models\VendorProduct::where('id',$for->product_id)->first()->id}}">{{App\Models\VendorProduct::where('id',$for->product_id)->first()->product}}</option>'+

              '@endforeach'+
            '</select></td>'+
                        '<td><input  class="form-control quantity" type="text"  placeholder="Qty" name="qty[]"></td>'+
                     '<td><input  class="form-control amount" type="text"  placeholder="amount" name="amount[]" ></td>'+
                                                 
            '<td><a href="#" class="btn btn-danger remove" onclick="event.preventDefault()">Remove</a></td>'+
            
          '</tr>';
          $('tbody').append(tr); 
  };

  $('tbody').on('click', '.remove', function(){
        var tr=$(this).parent().parent();
         var minus =tr.find('.amount').val();
           // alert(minus)
         var stotal=$('.stotal').val();

         // alert(stotal)

         var final=stotal-minus;
    $('.stotal').val(final);
    $('.total').val(final);


       $(this).parent().parent().remove();


  });


    $(document).ready(function(){


      $('.gst').change(function(){

             var a = $('.gst').val();
              
               //alert(a);

                    if(a == 17)
                    {
                           
                        // var stotal = $('.stotal').val();

                       var total = $('.total').val();

                        //alert(total);

                        var total1 =total/100*17;
                              alert(total1);
                         
                         // var twoPlacedFloat = parseFloat((total).toFixed(2));
                         //   alert(twoPlacedFloat);
                           var gtotal=parseFloat(total) + parseFloat((total1).toFixed(2));

                       alert(gtotal);

                        $('.total').val(gtotal);



                    }
                    else
                    {
                        var total = $('.total').val();

                         alert(total);

                        var ptotal = total/100*17;

                        var b =parseFloat((ptotal).toFixed(2))

                        alert(b);

                           var l = parseFloat(total) - parseFloat(b);

                           alert(l);
                       
                           $('.total').val(l);

                    }
               

          });
            
          $('.pst').change(function(){

               var a = $('.pst').val();
              
               //alert(a);

                    if(a == 16)
                    {
                           
                        var stotal = $('.stotal').val();
                        var ftotal = $('.total').val();

                         //alert(ftotal);

                       // alert(stotal);

                        var total =ftotal/100*16;
                            //alert(total);

                           var gtotal= parseInt(total)  + parseInt(ftotal);

                       //alert(gtotal);

                        $('.total').val(gtotal);



                    }
                    else
                    {
                        var total = $('.total').val();


                           var ptotal =total/100*16;
                           var l=parseInt(total)  - parseInt(ptotal);;
                      //  alert(ptotal);
                           $('.total').val(l);
                    }
               

          });
$('.income').change(function(){

               var a = $('.income').val();
              
               //alert(a);

                    if(a == 4.5)
                    {
                           
                        var stotal = $('.stotal').val();
                        var ftotal = $('.total').val();

                         //alert(ftotal);

                       // alert(stotal);

                        var total =ftotal/100*4.5;
                            //alert(total);

                           var gtotal= parseInt(total)  + parseInt(ftotal);

                       //alert(gtotal);

                        $('.total').val(gtotal);



                    }
                    else
                    {
                        var total = $('.total').val();


                           var ptotal =total/100*4.5;
                           var l=parseInt(total)  - parseInt(ptotal);;
                       alert(ptotal);
                           $('.total').val(l);
                    }
               

          });
$('.pincome').change(function(){

               var a = $('.pincome').val();
              
               //alert(a);

                    if(a == 10)
                    {
                           
                        var stotal = $('.stotal').val();
                        var ftotal = $('.total').val();

                         //alert(ftotal);

                       // alert(stotal);

                        var total =ftotal/100*10;
                            //alert(total);

                           var gtotal= parseInt(total)  + parseInt(ftotal);

                       //alert(gtotal);

                        $('.total').val(gtotal);



                    }
                    else
                    {
                        var total = $('.total').val();


                           var ptotal =total/100*10;
                           var l=parseInt(total)  - parseInt(ptotal);
                        alert(ptotal);
                           $('.total').val(l);
                    }
               

          });
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

    

    $('tbody').change(function(){


           var tr=$(this).parent().parent();
           var quantitys=tr.find('.rate option:selected').data('quantitys');
           //alert(quantitys);

           tr.find('.quantity').attr("max",quantitys);



    });



    

       $('tbody').delegate('.quantity,.rate','keyup',function(){
        
        var tr=$(this).parent().parent();
        var quantitys=tr.find('.rate option:selected').data('quantitys');

       // alert(quantitys);

        var rate=tr.find('.rate option:selected').data('value');
        console.log(rate);
        var quantity=tr.find('.quantity').val();

        var max_qty = tr.find('.quantity').attr("max");

     // alert(max_qty);
        if (max_qty >= quantity) {

          //alert(quantity);


        }

        else{
         // alert("not allowed");



          
        }
        var amount=(quantity*rate);

        //console.log(amount)

        tr.find('.amount').val(amount);


        total();
          

       });
     function total(){
    
    var stotal=0;

    $('.amount').each(function(i,e){
     
         var amount=$(this).val()-0;

             stotal+=amount;



    })

      console.log(stotal)

      $('.stotal').val(stotal);

      $('.total').val(stotal);

     }


</script>
@endsection