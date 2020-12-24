<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SlipController extends Controller
{
    public function addslip(){


    	return  view('slip.createslip');
    }
    public function viewslip(){


    	return  view('slip.viewslip');
    }

    public function viewinvoice(){


    	 return  view('slip.viewinvoice');
    }
    
}
