<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\InvoiceDetail;
use App\Models\Customer;
use App\Models\InvoiceService;
use App\Models\trader;





class PaymentController extends Controller
{
    //
    
       public function viewstatus(){
                

                $payment=Payment::all();

       	return view('payment.viewstatus',compact('payment'));
       }

public function singlecustomer($customer_id){

         //return $customer_id;

           $invoice=InvoiceDetail::where('customer_id',$customer_id)->get();

           // return $invoice;

       	return view('payment.singlecustomerdetail',compact('invoice'));
       }


       
       public function viewinvoice($id){

                       
                       $invoice=InvoiceDetail::where('id',$id)->first();

                     //  return $invoice;


    
            $customerinfo=Customer::where('id',$invoice->customer_id)->first();
           $invoicedetail=InvoiceDetail::where('id',$id)->first();
          $invoiceservice=InvoiceService::where('invoice_id',$id)->get();
          //return $invoicedetail;
          $trader=trader::where('id',$invoice->trade_name)->first();


           return  view('payment.invoice',compact('customerinfo','invoiceservice','invoicedetail','trader'));

       }



}
