<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\InvoiceDetail;
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



}
