<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dd('Hello World again!');
});

Route::resource('products', ProductController::class);
