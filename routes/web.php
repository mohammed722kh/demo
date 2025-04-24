<?php

use Illuminate\Support\Facades\Route;

Route::get('/layouts.layout', function () {
    return view('layouts.layout');
});
Route::get('/name/{name}', function (){
     return' ' . request('name');
});


Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/create-product', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
