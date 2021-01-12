<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\InvoiceDetail;
use App\Models\Slip;
use App\Models\SlipInvoice;

class SlipController extends Controller
{
    public function addslip(){

          $customer=Customer::all();
          $invoicedetail=InvoiceDetail::all();
    	return  view('slip.createslip',compact('customer','invoicedetail'));
    }
    public function viewslip(){


    	return  view('slip.viewslip');
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


            if(count($request->cinvoice) > 0)        
        {

            foreach($request->cinvoice as $item=>$v){
                $data2=array(  

                 'invoice_id'=>$request->cinvoice[$item],
  
                );

                $SlipInvoice = new SlipInvoice($data2);
                 $SlipInvoice->slip_id=$slip_id;
                $SlipInvoice->save();

            }
        }


 
              


     }
    
}
