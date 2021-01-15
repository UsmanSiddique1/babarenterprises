<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvoiceDetail;
use App\Models\InvoiceService;
use App\Models\Customer;
use App\Models\trader;
use App\Models\Payment;
use App\Models\Inventry;
use App\Models\VendorService;
class InvoiceController extends Controller
{
    public function insertinvoice(Request $request){

                    // return $request;
         $data=$request->validate([
              'trade_name'=>'required|max:255',
               'customer_id'=>'required|max:255',
               'mdpt_id'=>'required|max:255',
               'sdpt_id'=>'required|max:255',
               'gsttax'=>'required|max:255',
               'psttax'=>'required|max:255',
               'incometax'=>'required|max:255',
               'ddate'=>'required|max:255',
               'punjabincometax'=>'required|max:255',
               'subtotal'=>'required|max:255',
               
        ]);

      if($request['gsttax'] == '17')
      {
             $gst=$request['subtotal']/100*17;
             //return $gst;        
      }

      else
      {

         $gst=0;
        
      }
     if($request['psttax'] == '16')
      {
             $pst=$request['subtotal']/100*16;
            //return $pst;        
      }

      else
      {

         $pst=0;
        
      }
      if($request['incometax'] == '4.5')
      {
             $incometax=$request['subtotal']/100*4.5;
             //return $incometax;        
      }

      else
      {

         $incometax=0;
        
      }
      if($request['punjabincometax'] == '10')
      {
             $punjabincometax=$request['subtotal']/100*10;
             //return $punjabincometax;        
      }

      else
      {

         $punjabincometax=0;
        
      }

          $total=$request['subtotal']+$gst+$pst+$incometax+$punjabincometax;

        //return $total;
                 
          

			         $create=new InvoiceDetail($data);
               $create->status='unpaid';
               $create->grandtotal=$total;
			         $create->save();
              // return $create;
			         $invoice_id=$create->id;

			   if(count($request->qty) > 0)        
        {

            foreach($request->qty as $item=>$v){
                $data2=array(
                    
                     'invoice_id'=>$invoice_id,
                    
                    'particular'=>$request->particular[$item],
                    'qty'=>$request->qty[$item],
                    'amount'=>$request->amount[$item],
                    
                    
                );
                           


                        $product=$data2['particular'];
                        $productqty=$data2['qty'];
                        $create=Inventry::where('product_id',$product)->first();
                       
                              $updateqty=$create->qty-$productqty;
                              $create->qty=$updateqty;
                              $create->save();
                       
                      
                          
                      // return $updateqty;
                         

                $InvoiceService = new InvoiceService($data2);
                $InvoiceService->save();



                

            }
        }




          $customerinfo=Customer::where('id',$request['customer_id'])->first();
          $invoiceservice=InvoiceService::where('invoice_id',$invoice_id)->get();
          $invoicedetail=InvoiceDetail::where('customer_id',$request['customer_id'])->first();
          $trader=trader::where('id',$request->trade_name)->first();


             
               // $customer_id_paymet=$create->customer_id;

    //return $customer_id_paymet;


       if($create=Payment::where('customer_id',$request['customer_id'])->first())
         

           {
             
             $customer_total=$create->total_payment;
               $customer_remaing=$create->remaing_payment;

               $create->total_payment=$customer_total+$request['subtotal'];
               $create->remaing_payment=$customer_remaing+$request['subtotal'];

               $create->save();

             //  return $create;


           } 

         else

         {

          $create=New Payment();
           $create->customer_id=$request['customer_id'];
           $create->total_payment=$request['subtotal'];
           $create->remaing_payment=$request['subtotal'];
           $create->status='unpaid';
             
             $create->save();

             //return $create;


         }         
     


         return  view('slip.viewinvoice',compact('customerinfo','invoiceservice','invoicedetail','trader'));
        // return redirect()->back()->with('status', 'order added');

    }
}
