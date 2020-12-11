<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DTaxController;
use App\Http\Controllers\DepartmentController;

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
 


 //payment
Route::get('view-status',[PaymentController::class,'viewstatus'])->name('viewstatus');

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