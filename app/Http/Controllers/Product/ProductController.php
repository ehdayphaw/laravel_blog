<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Product\ProductController;
Route::get('/products', [ProductController::class, 'index']);

class ProductController extends Controller
{
    //
}
