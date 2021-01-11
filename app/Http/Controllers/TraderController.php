<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trader;


class TraderController extends Controller
{
    
public function addtrader(){

	return view('traders.addtrader');
}

public function inserttrader(Request $request){

	//return $request;

         $data=$request->validate([
               'tname'=>'max:255',
		      'phoneno'=>'max:255|',
		      'email'=>'max:255',
		      'ntn'=>'max:255',
          'address'=>'max:255',
          
		      'strn'=>'max:255',
              

]);


request()->validate([
            'image' => 'max:2048',
       ]);
       if ($files = $request->file('image')) {
           $destinationPath = public_path('image/');
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
          // return $profileImage;
           $files->move($destinationPath, $profileImage);
           $insert['image'] = "$profileImage";
            $create=new trader($data);
            
            $create->image = "$profileImage";
           
             $create->save();
        }


       return redirect()->back()->with('status', 'Traders Added'); 
					
}



public function viewtrader(){



	$traders=trader::all();

	return view('traders.viewtrader',compact('traders'));
}

public function deletetrader($id){
     
     $delete1=trader::where('id',$id)->first();
     //return $delete1;
     $delete1->delete();

     return redirect()->back();

}
  public function addmodal1(Request $request){


  	//return $request;
    $id=$request['id'];

request()->validate([
            'image' => 'max:2048',
       ]);

$update=trader::where('id',$id)->first();


       if ($files = $request->file('image')) {
           $destinationPath = public_path('image/');
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
          // return $profileImage;
           $files->move($destinationPath, $profileImage);
           $insert['image'] = "$profileImage";
            
            //return $update;

            
            $update->image = "$profileImage";
           
            


             //return $update;
        }
   			$update->tname=$request['tname'];
		    $update->phoneno=$request['phoneno'];
		    $update->email=$request['email'];
        $update->address=$request['address'];
		    $update->ntn=$request['ntn'];
		    $update->strn=$request['strn'];
		     $update->save();

       return redirect()->back(); 



  }



}