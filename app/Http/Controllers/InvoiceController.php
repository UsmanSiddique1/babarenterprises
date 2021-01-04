<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvoiceDetail;
use App\Models\InvoiceService;
use App\Models\Customer;
class InvoiceController extends Controller
{
    public function insertinvoice(Request $request){


         $data=$request->validate([
         
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

			         $create=new InvoiceDetail($data);
			         $create->save();
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

                $InvoiceService = new InvoiceService($data2);
                $InvoiceService->save();

            }
        }
          $customerinfo=Customer::where('id',$request['customer_id'])->first();
          $invoiceservice=InvoiceService::where('invoice_id',$invoice_id)->get();
          $invoicedetail=InvoiceDetail::where('customer_id',$request['customer_id'])->first();
        

         return  view('slip.viewinvoice',compact('customerinfo','invoiceservice','invoicedetail'));
        // return redirect()->back()->with('status', 'order added');

    }
}
