<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DTaxController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SlipController;
use App\Http\Controllers\AssistantController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\TraderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('home-page',function(){

   return view('homepage');

});

//customer
 Route::get('add-customer',[CustomerController::class,'addcustomer'])->name('addcustomer');
 Route::get('view-all-customer',[CustomerController::class,'viewcustomer'])->name('viewcustomer');
 Route::get('add-order-customer',[CustomerController::class,'addordercustomer'])->name('addordercustome');
 Route::get('view-customer-order',[CustomerController::class,'viewcustomerorder'])->name('viewcustomerorder');
 Route::post('insertcustomer',[CustomerController::class,'insertcustomer'])->name('insertcustomer');
  Route::post('editcustomer1',[CustomerController::class,'editcustomer1'])->name('editcustomer1');
Route::get('editcustomer/{id}',[CustomerController::class,'editcustomer'])->name('editcustomer');
Route::get('deletecustomer/{id}',[CustomerController::class,'deletecustomer'])->name('deletecustomer');


 //vendor
 Route::get('add-vendor',[VendorController::class,'addvendor'])->name('addcustomer');
 Route::get('view-all-vendor',[VendorController::class,'viewvendor'])->name('viewcustomer');
 Route::get('add-order',[VendorController::class,'addorder'])->name('addordercustomer');
 Route::get('view-order',[VendorController::class,'vieworder'])->name('vieworder');
 Route::post('insertvendor',[VendorController::class,'insertvendor'])->name('insertvendor');
 Route::post('insertvendororder',[VendorController::class,'insertvendororder'])->name('insertvendororder');
 Route::post('serachvendor',[VendorController::class,'serachvendor'])->name('serachvendors');
  Route::get('add-product1',[VendorController::class,'addproduct'])->name('addproducts');
 Route::post('insertproduct',[VendorController::class,'insertproduct'])->name('insertproducts');


Route::get('view-service',[VendorController::class,'viewservice'])->name('viewservices');
Route::get('deleteservice/{id}',[VendorController::class,'deleteservice'])->name('deleteservice');
Route::post('editservice',[VendorController::class,'editservice'])->name('editservices');
  Route::get('inventry',[VendorController::class,'inventry'])->name('inventry');


 //payment
Route::get('view-status',[PaymentController::class,'viewstatus'])->name('viewstatus');
Route::get('singlecustomer/{customer_id}',[PaymentController::class,'singlecustomer'])->name('singlecustomers');

//department
Route::get('add-major-department',[DepartmentController::class,'addmajordepartment'])->name('addmajordepartment');
 Route::get('add-sub-department',[DepartmentController::class,'addsubdepartment'])->name('addsubdepartment');
 Route::get('view-department',[DepartmentController::class,'viewdepartment'])->name('viewdepartment');
  Route::post('insertdept',[DepartmentController::class,'insertdept'])->name('insertdept');
  Route::post('insertsdpt',[DepartmentController::class,'insertsdpt'])->name('insertsdpt');
  Route::post('searchdpt',[DepartmentController::class,'searchdpt'])->name('searchdpt');
 Route::get('deletesdpt/{id}',[DepartmentController::class,'deletesdpt'])->name('deletesdpt');
  Route::post('add_modal',[DepartmentController::class,'addmodal'])->name('add_modal');

 //tax
 Route::get('add-tax',[DTaxController::class,'addtax'])->name('addtax');
 Route::get('view-tax',[DTaxController::class,'viewtax'])->name('viewtax');
 Route::post('inserttax',[DTaxController::class,'inserttax'])->name('inserttax');

 //slip
 Route::get('add-slip',[SlipController::class,'addslip'])->name('addslips');
 Route::get('view-slip',[SlipController::class,'viewslip'])->name('viewslips');
Route::post('insertslip',[SlipController::class,'insertslip'])->name('insertslips');
 Route::get('view-invoice',[SlipController::class,'viewinvoice'])->name('viewinvoice');
 Route::post('serachcustomer',[SlipController::class,'serachcustomer'])->name('serachcustomer');



 //assistant
 Route::get('add-assistant',[AssistantController::class,'addassistant'])->name('addassistants');
 Route::get('view-assistant',[AssistantController::class,'viewassistant'])->name('viewassistants');



 //invoice
Route::post('insertinvoice',[InvoiceController::class,'insertinvoice'])->name('insertinvoice');

// trader
 Route::get('add-trader',[TraderController::class,'addtrader'])->name('addtraders');
Route::get('view-trader',[TraderController::class,'viewtrader'])->name('viewtraders');
Route::post('inserttrader',[TraderController::class,'inserttrader'])->name('inserttrader');
 Route::get('delete/{id}',[TraderController::class,'deletetrader'])->name('deletetrader');
 Route::get('delete/{id}',[TraderController::class,'deletetrader'])->name('deletetrader');
  Route::post('addmodal1',[TraderController::class,'addmodal1'])->name('addmodal1');
//prodct category


  Route::get('add-category',[VendorController::class,'addcategory'])->name('addcategorys');
 Route::post('insertcategory',[VendorController::class,'insertcategory'])->name('insertcategorys');


Route::get('view-category',[VendorController::class,'viewcategory'])->name('viewcategorys');
Route::get('deletecategory/{id}',[VendorController::class,'deletecategory'])->name('deletecategory');
Route::post('editcategory',[VendorController::class,'editcategory'])->name('editcategorys');
