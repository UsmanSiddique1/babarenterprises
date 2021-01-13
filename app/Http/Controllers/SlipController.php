<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\InvoiceDetail;
use App\Models\Slip;
use App\Models\SlipInvoice;
use App\Models\Payment;
class SlipController extends Controller
{
    public function addslip(){

          $customer=Customer::all();
          $invoicedetail=InvoiceDetail::where('status','unpaid')->get();
    	return  view('slip.createslip',compact('customer','invoicedetail'));
    }
    public function viewslip(){

          $customer=Customer::all();
          $invoice=[];
    	return  view('slip.viewslip',compact('customer','invoice'));
    }

    public function serachcustomer(Request $request){
              $customer=Customer::all();
             $invoice=Slip::where('customer_id',$request->customer_id)->get();

             return  view('slip.viewslip',compact('customer','invoice'));

    }

    public function viewinvoice(){


    	 return  view('slip.viewinvoice');
    }

    
     public function insertslip(Request $request)
     {

          //return $request;
               $data=$request->validate([
         
               'customer_id'=>'required|max:255',
               'psttax'=>'max:255',
               'incometax'=>'max:255',
               'gslip'=>'max:255',
               'cnumber'=>'max:255',
               'cdate'=>'max:255',
        ]);
            
              

            $slip= new Slip($data);
            $slip->save();
            $slip_id=$slip->id;

               
               $updatepayment=Payment::where('customer_id',$request['customer_id'])->first();

               $save=$updatepayment->remaing_payment-$request['gslip'];

               $updatepayment->remaing_payment=$save;
                           if($updatepayment->remaing_payment =='0' )
                           {
                             $updatepayment->status='paid';

                           }
                           else

                           {

                            $updatepayment->status='unpaid';
                           }

               $updatepayment->save();




            if(count($request->cinvoice) > 0)        
        {

            foreach($request->cinvoice as $item=>$v){
                $data2=array(  
                                 
                 'invoice_id'=>$request->cinvoice[$item],
  
                );

                $SlipInvoice = new SlipInvoice($data2);

                //return $SlipInvoice;
                 $SlipInvoice->slip_id=$slip_id;
                $SlipInvoice->save();

                    $invoiceupdate=InvoiceDetail::where('id',$data2)->first();

                   // return $invoiceupdate;
                    
                     $invoiceupdate->status='paid';
                     $invoiceupdate->save();



            }
        }


 
          return redirect()->back()->with('status', 'done');   


     }
    
}
