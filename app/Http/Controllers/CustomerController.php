<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\MajorDepartment;
use App\Models\SubDepartment;
use App\Models\Tax;
use App\Models\VendorService;
use App\Models\trader;


class CustomerController extends Controller
{
    public function addcustomer(){


    	return view('customer.addcustomer');
    }
     public function viewcustomer(){
       

          $customer=Customer::all();

    	return view('customer.viewcustomer',compact('customer'));
    }

 public function addordercustomer(){
          
          $majordpt=MajorDepartment::all();
          $subdpt=SubDepartment::all();
          $particular=VendorService::all();
          $customer=Customer::all();
$trader=trader::all();
         // return $particular;

          // $saletax=Tax::where('taxtype','saletax')->get();
          // $gsttax=Tax::where('taxtype','gsttax')->get();

          // return $saletax;

          // return $gsttax;

    	return view('customer.addcustomerorder',compact('majordpt','subdpt','particular','customer','trader'));
    }
    public function viewcustomerorder(){


    	return view('customer.viewcustomerorder');
    }
  
       public function insertcustomer(Request $request)
       {


        $data=$request->validate([
         
               'cname'=>'required|max:255',
               'phoneno'=>'required|max:255',
               'email'=>'required|max:255',
               'address'=>'required|max:255',
        ]);
           
           Customer::create($data);

           return redirect()->back()->with('status', 'Customer Added');



       }

       public function editcustomer($id){


        //return $id;
       
        $edit=Customer::where('id',$id)->first();
        return view('customer.editcustomer',compact('edit'));
         


       }
       
       public function deletecustomer($id){


        //return $id;

        $del=Customer::where('id',$id)->first();

        $del->delete();

        return redirect()->back();
       }

       public function editcustomer1(Request $request)
        {

              $id=$request['id'];

               $data=$request->validate([
         
               'cname'=>'required|max:255',
               'phoneno'=>'required|max:255',
               'email'=>'required|max:255',
               'address'=>'required|max:255',
               ]);

              $edit=Customer::where('id', $id)->first();

              
                 $edit->cname=$request['cname'];
                 $edit->phoneno=$request['phoneno'];
                 $edit->email=$request['email'];
                 $edit->address=$request['address'];

                 $edit->save();
                  return redirect('view-all-customer');

        }
          


}
