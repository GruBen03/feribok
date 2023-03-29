<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RiasztasokController;


Route::get('/', function () {
    return view('welcome');
});


Route::post("riasztas-rogzites",[RiasztasokController::class,"rogzites"]);

Route::get("/heloka",function(){
    return "hello";
});