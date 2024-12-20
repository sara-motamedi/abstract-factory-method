<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('product-presenter', [ProductController::class, 'show']);
