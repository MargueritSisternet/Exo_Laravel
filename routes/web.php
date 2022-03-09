<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get("/", [HomeController::class, "homepage"]);
Route::get("/products", [ProductController::class, "Listeproduits"]);
Route::get('/product/{id}', [ProductController::class, 'Ficheproduit']);
