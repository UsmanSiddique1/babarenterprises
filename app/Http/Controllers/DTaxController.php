<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tax;

class DTaxController extends Controller
{
     
    public function addtax(){
    	return view('tax.addtax');
    }


    public function viewtax(){
    	return view('tax.viewtax');
    }

    public function inserttax(Request $request){



    	    $data=$request->validate([
         		'taxtype'=>'required|max:255',
         		'percentage'=>'required|max:255',


    	    ]);

    	    Tax::create($data);

    	    return redirect()->back()->with('status','Tax Added');

    }
    
}
