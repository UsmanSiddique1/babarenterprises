<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Vendor;
use App\Models\Slip;
use App\Models\trader;

class HomeCOntroller extends Controller
{
    //

    public function homepage(){



    	  $customer=Customer::all()->count();
    	   $vendor=Vendor::all()->count();
    	    $trader=trader::all()->count();
    	    $slip=Slip::sum('gslip');

    	   // return $slip;

    	return view('homepage',compact('customer','vendor','trader','slip'));
    }
}
