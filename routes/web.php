<?php

use App\Http\Controllers\reC;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('f',[reC::class,'index']);