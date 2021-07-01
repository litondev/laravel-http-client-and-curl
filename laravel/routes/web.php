<?php

use Illuminate\Support\Facades\Route;

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

Route::group(["prefix" => "curl"],function(){
	Route::get("/check",function(){
		return "Ok";
	});

	Route::get("/check-error",function(){
		return response()->json(["Status" => "Failed"],500);
	});

	Route::post("/check-post",function(){
		return response()->json(request()->all());
	});

	Route::post("/check-photo",function(){
		return response()->json(request()->file('photo') ? 'true' : 'false');
	});
});

Route::group(["prefix" => "http-client"],function(){
	Route::get("testing-1","TestingHttpRequest@testing1");	
	Route::get("testing-2","TestingHttpRequest@testing2");
	Route::get("testing-3","TestingHttpRequest@testing3");
	Route::get("testing-4","TestingHttpRequest@testing4");
	
	Route::get("/check",function(){
		return "Ok";
	});

	Route::get("/check-error",function(){
		return response()->json(["Status" => "Failed"],500);
	});

	Route::post("/check-post",function(){
		return response()->json(request()->all());
	});

	Route::post("/check-photo",function(){
		return response()->json(request()->file('photo') ? 'true' : 'false');
	}); 
});