<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\VendorBill;
use App\Models\VendorService;
use App\Models\VendorProduct;
use App\Models\ProductCategory;
class VendorController extends Controller
{
   public function addvendor(){
   	
   		return view('vendor.addvendor');
   }
   public function viewvendor(){
   	   
         $vendor=Vendor::all();
   		return view('vendor.viewvendor',compact('vendor'));
   }
   public function addorder(){
   	  $vendor=Vendor::all();
      $product=VendorProduct::all();
   		return view('vendor.addorder',compact('vendor','product'));
   }
   public function vieworder(){
   	$vendor=Vendor::all();
      $detail=[];
   		return view('vendor.vieworder',compact('vendor','detail'));
   }
    public function insertvendor (Request $request)

    {
      $data=$request->validate([
         
               'vname'=>'required|max:255',
               'phoneno'=>'required|max:255',
               'email'=>'required|max:255',
               'address'=>'required|max:255',
        ]);
           
           Vendor::create($data);

           return redirect()->back()->with('status', 'Customer Added');
    }


    public function insertvendororder(Request $request){

          
          $vendorname=$request['vendor_id'];
          $bill=$request['bill'];

          $create=new VendorBill();
          $create->vendor_id=$vendorname;
          $create->bill=$bill;
          $create->save();

          $bill_id=$create->id;

           if(count($request->qty) > 0)        
        {

            foreach($request->qty as $item=>$v){
                $data2=array(
                    
                     'bill_id'=>$bill_id,
                     'vendor_id'=>$vendorname,
                    'qty'=>$request->qty[$item],
                    'particular'=>$request->particular[$item],
                    'prate'=>$request->prate[$item],
                    'srate'=>$request->srate[$item],
                    'amount'=>$request->amount[$item],
                    
                );

                $VendorService = new VendorService($data2);
                $VendorService->save();

            }
        }

        return redirect()->back()->with('status', 'order added');

    }

    public function serachvendor(Request $request){


                 $id=$request['vendor_id'];

               $detail=VendorService::where('vendor_id',$id)->get();

              $vendor=Vendor::all();
         return view('vendor.vieworder',compact('vendor','detail'));
    }


    public function addproduct(){
      $category=ProductCategory::all();

      return view('productservice.addproductandservice',compact('category'));
    }

    public function insertproduct(Request $request){


     //return $request;

          if(count($request->product) > 0)        
        {

            foreach($request->product as $item=>$v){
                $data2=array(
                    
                     
                    'product'=>$request->product[$item],
                );

                $product = new VendorProduct($data2);
                $product->category_id=$request['category_id'];


                $product->save();

            }

        }

return redirect()->back()->with('status','product Added');


    }

    public function viewservice(){


      $medicines=VendorProduct::all();
      $category=ProductCategory::all();

      return view('productservice.viewproductandservice',compact('medicines','category'));
    }
     

     public function editservice(Request $request){


        $id=$request['id'];

        $product=$request['product'];
       

        
        if($request['category_id'] == ""){
                  
            $edit=VendorProduct::where('id',$id)->first();
            $edit->product=$product;
            $edit->save();
            //return $edit;
        }
        else
        {

              $edit=VendorProduct::where('id',$id)->first();
              $edit->product=$product;
              $edit->category_id=$request['category_id'];
              $edit->save();
        //  return $edit;
        }

        return redirect()->back();
      }

      public function deleteservice($id){

        $delete=VendorProduct::where('id',$id)->first();



            $delete->delete();

            return redirect()->back();
      }
      //product category
      public function addcategory(){

      return view('productservice.addproductcartegery');
    }

    public function insertcategory(Request $request){


     // return $request;

          if(count($request->category) > 0)        
        {

            foreach($request->category as $item=>$v){
                $data2=array(
                    
                     
                    'category'=>$request->category[$item],
                    
                );

                $category = new ProductCategory($data2);
                $category->save();

            }

        }

return redirect()->back()->with('status','Category Added');


    }

    public function viewcategory(){


      $medicines=ProductCategory::all();

      return view('productservice.viewproductcategery',compact('medicines'));
    }
     

     public function editcategory(Request $request){


        $id=$request['id'];

        $category=$request['category'];

        $edit=ProductCategory::where('id',$id)->first();

        $edit->category=$category;

        $edit->save();

        return redirect()->back();
      }

      public function deletecategory($id){

        $delete=ProductCategory::where('id',$id)->first();



            $delete->delete();

            return redirect()->back();
      }
}



// addvendor
// viewvendor
// addorder
// vieworder