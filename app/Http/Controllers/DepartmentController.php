<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MajorDepartment;
use App\Models\SubDepartment;
class DepartmentController extends Controller
{
    



    public function addmajordepartment(){

           return view('departments.addmajordepartment');

    }

    public function addsubdepartment(){

    	     $majordpt=MajorDepartment::all();

           return view('departments.addsabdepartment',compact('majordpt'));

    }
     public function viewdepartment(){
     	 $majordpt=MajorDepartment::all();
     	 $sname=[];

           return view('departments.viewdepartmentdetail',compact('majordpt','sname'));

    }


    public function insertdept(Request $request){

      $data=$request->validate([
         
               'dname'=>'required|max:255',
               'phoneno'=>'required|max:255',
               'email'=>'required|max:255',
               'address'=>'required|max:255',
        ]);
           
           MajorDepartment::create($data);

           return redirect()->back()->with('status', 'Department Added');



    }

    public function insertsdpt(Request $request){
       
             $data=$request->validate([
         
               'sname'=>'required|max:255',
               'phoneno'=>'required|max:255',
               'email'=>'required|max:255',
               'address'=>'required|max:255',
        ]); 



             $create= new SubDepartment($data);
             $create->mdpt_id=$request['mdpt'];

             $create->save();
             return redirect()->back()->with('status', 'SubDepartment Added');
    }


    public function searchdpt(Request $request){



    	$id=$request['mname'];

    	$sname=SubDepartment::where('mdpt_id',$id)->get();
    	$majordpt=MajorDepartment::all();
    	return view('departments.viewdepartmentdetail',compact('sname','majordpt'));
    }
  public function deletesdpt($id){


  	$delete=SubDepartment::where('id',$id)->first();

  	$delete->delete();
  	return redirect('view-department');

  }

  public function addmodal(Request  $request){

  

              $id=$request['id'];

              $edit=SubDepartment::where('id', $id)->first();

              
                 $edit->sname=$request['sname'];
                 $edit->phoneno=$request['phoneno'];
                 $edit->email=$request['email'];
                 $edit->address=$request['address'];

                 $edit->save();
                  return redirect('view-department');


  }
    
}
