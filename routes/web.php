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

use App\Http\Controllers\Eventcontroller;

Route::get('/',[Eventcontroller::class,'index']);
Route::get('/events/create',[Eventcontroller::class,'create'])->middleware('auth');
Route::get('/events/{id}',[Eventcontroller::class,'show']);
Route::post('/events',[Eventcontroller::class,'store']);
Route::delete('/events/{id}',[Eventcontroller::class,'destroy'])->middleware('auth');
Route::get('/events/edit/{id}',[Eventcontroller::class,'edit'])->middleware('auth');
Route::put('/events/update/{id}',[Eventcontroller::class,'update'])->middleware('auth');





Route::get('/contact', function () {
    return view('contact');
});


Route::get('/dashboard',[Eventcontroller::class,'dashboard'])->middleware('auth');



