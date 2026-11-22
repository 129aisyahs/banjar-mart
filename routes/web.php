<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect('/produk');
});

Route::get('/produk', [ProductController::class, 'index']);