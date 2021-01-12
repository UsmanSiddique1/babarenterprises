<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    
       public function viewstatus(){


       	return view('payment.viewstatus');
       }

public function singlecustomer(){


       	return view('payment.singlecustomerdetail');
       }



}
