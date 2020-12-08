<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DTaxController extends Controller
{
     
    public function addtax(){
    	return view('tax.addtax');
    }


    public function viewtax(){
    	return view('tax.viewtax');
    }
    
}
