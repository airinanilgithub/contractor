<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\adminregistercontroller;
use App\Http\Controllers\categorycontroller;
use App\Http\Controllers\projectcontroller;
use App\Http\Controllers\bookingcontroller;
use App\Http\Controllers\contactcontroller;
use Carbon\Carbon;
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
    return view('first');
    
    
});



//Route::get('/booking',[bookingcontroller::class,'create']);
//Route::post('/bookingstore',[bookingcontroller::class,'store']);

Route::get('/ulogout',[registercontroller :: class,'logout']);


Route::get('/register',[registercontroller::class,'create']);
Route::post('/registerread',[registercontroller::class,'store']);
Route::post('/logs',[registercontroller::class,'logs']);
Route::get('/registerview',[registercontroller::class,'index']);

Route::get('/adminregister',[adminregistercontroller::class,'create']);
Route::post('/adminregisterread',[adminregistercontroller::class,'store']);
Route::post('/adminlogs',[adminregistercontroller::class,'check']);
Route::get('/adminlogout',[adminregistercontroller::class,'adminlogout']);



//Route::post('/projectstore',[projectcontroller::class,'store']);
//Route::get('/projectcreate',[projectcontroller::class,'create']);

//Route::get('/projects',[projectcontroller::class,'index']);



Route::get('/adminlogin',[adminregistercontroller::class,'createlogin']);



Route::get('/sample', function () {
    return view('sample');
    
    
});
    
Route::post('/ulogs',[registercontroller::class,'check']);


Route::group(['middleware'=>['Usercheck']],function()
{
    Route::get('/userhome',[registercontroller::class,'usernew']);
    Route::get('/aboutus',[registercontroller::class,'aboutus']);
    Route::get('/contact',[registercontroller::class,'contact']);
    Route::post('/cussearch',[projectcontroller::class,'search']);
    Route::get('/myorders',[bookingcontroller::class,'myorder']);
    Route::get('/userview',[projectcontroller::class,'indexnew']);
    Route::get('/index',[registercontroller::class,'loginnew']);
 
    Route::get('/userhome',[registercontroller::class,'homeuser']);
    Route::get('/userviewdetails/{id}',[projectcontroller::class,'indexnewnew']);
    Route::get('/download/{id}',[bookingcontroller::class,'invoice']);

    Route::get('/booking',[bookingcontroller::class,'create']);
    Route::post('/bookings',[bookingcontroller::class,'projectbooking']);
    Route::get('/contact',[contactcontroller::class,'create']);
    Route::post('/contacts',[contactcontroller::class,'contact']);

});

Route::group(['middleware'=>['admincheck']],function()
{
    Route::get('/contactsview',[contactcontroller::class,'index']);
Route::get('/bookingview',[bookingcontroller::class,'index']);
    route::post('/ordereditprocess/{id}',[bookingcontroller::class,'updateorder']);

route::get('/order/{id}/edit', [bookingcontroller::class,'orderedit']);
 
  
    Route::get('/adminhome',[adminregistercontroller::class,'adminhome']);
    route::get('/categoryeditview/{id}', [categorycontroller::class,'edit']);

route::get('/categorydeleteview/{id}', [categorycontroller::class,'deleteview']);

route::post('/categoryeditprocess/{id}', [categorycontroller::class,'update']);


route::post('/categorydeleteprocess/{id}',[categorycontroller::class,'destroy']);



route::post('/projectadd', [projectcontroller::class,'store']);


route::get('/viewproject',[projectcontroller::class,'index']);
route::get('/editview/{id}', [projectcontroller::class,'edit']);

route::get('/deleteview/{id}', [projectcontroller::class,'deleteview']);

route::post('/bookeditprocess/{id}', [projectcontroller::class,'update']);

route::get('/addbook',[projectcontroller::class,'create']);

route::post('/bookdeleteprocess/{id}',[projectcontroller::class,'destroy']);
Route::get('/category',[categorycontroller::class,'create']);
Route::post('/categoryread',[categorycontroller::class,'store']);
Route::get('/categorys',[categorycontroller::class,'index']);

});
route::get('/addcategory',[projectcontroller::class,'getAllGenre']);
