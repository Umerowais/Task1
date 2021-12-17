<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;

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

///////////view return./////////////////
 Route::get('/Addddata',[AuthController::class, 'signupform']);
// // ///////////// use in form action to register user//////////
 Route::post('/save',[AuthController::class, 'signup']);
 ///////////view return./////////////////
 Route::get('Addinfo/',[AuthController::class,'loginform'])->name('login');
//  Route::get('/viewddata',[AuthController::class, 'loginform']);
// // ///////////// use in form action to register user//////////
 Route::post('/log',[AuthController::class, 'login']);




 Route::group(['middleware'=> 'auth:web'],function () {

 ///////// prefix route///////////////
 Route::prefix('/admin')->group(function () {
    /////////home page view//////////////
    Route::get('/abc',[FrontController::class, 'page']);


    Route::get('/logout',[frontController::class,'distroy'])->name('logout');
    //////////////Table page////////
    Route::get('/table',[FrontController::class, 'index']);
    Route::get('/table2',[FrontController::class, 'index2']);
    Route::get('/table3',[FrontController::class, 'index3']);
    ////////////delete data route.///////////////
    Route::get('/delete/{id}',[FrontController::class,'dld']);
    ////////////edit page view///////////////
    Route::get('/edit/{id}',[FrontController::class,'change']);

    ///////////// edit post function route//////////////
    Route::post('/update/{id}',[AuthController::class,'edit']);
    ///////////table cruud 1 k view ka route ///////////////
    Route::get('/Adddata',[AuthController::class, 'create']);
    //////////crud 1 k form k view ka route//////////////
    Route::post('/set',[AuthController::class, 'data']);

    ///////////////crud 1 k post function ka route isy form k action mein use karna hai////
    Route::post('/new/{id}',[AuthController::class,'modify']);
    Route::get('/change/{id}',[FrontController::class,'update']);

    //////////// crud 1 ka delete k function ka route bnana hai
    Route::get('/dld/{id}',[FrontController::class,'delete']);

                     ///////crud2////////
    Route::get('/Add',[AuthController::class, 'Info']);
    //////////crud 2 k form k view ka route//////////////
    Route::post('/data',[AuthController::class, 'reg']);
    ///////////////crud 2 k post function ka route isy form k action mein use karna hai////
    Route::post('/neww/{id}',[AuthController::class,'modification']);
    Route::get('/changee/{id}',[FrontController::class,'updation']);

    //////////// crud 2 ka delete k function ka route bnana hai
    Route::get('/dldd/{id}',[FrontController::class,'deletee']);
    });



  
  });
 
   

    Route::get('/pages',[FrontController::class, 'frontend']);








//  Route::get('/ab',function(){
//      return view('childpage.Tables');
//       });
//      Route::get('/aaa',function(){
//          return view('childpage.form');
//       });













//  Route::get('/ab',function(){
//      return view('childpage.Tables');
//       });
//      Route::get('/aaa',function(){
//          return view('childpage.form');
//       });








