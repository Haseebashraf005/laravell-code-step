<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControler;



Route::view('/','welcome',['company' => 'MyCompany']);



Route::get('/home/{name}', [UserControler::class,'home']);
Route::get('/about', [UserControler::class,'aboutUser']);
Route::get('/getusername/{name}', [UserControler::class,'getUserName']);
 