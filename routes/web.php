<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;

Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('dashboard', [ProductController::class, 'dashboard'])->name('dashboard');
Route::get('transaction-history', [ProductController::class, 'transactionHistory'])->name('transaction.history');
Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::get('sales/create', [SaleController::class, 'create'])->name('sales.create');
Route::post('sales/store', [SaleController::class, 'store'])->name('sales.store');
Route::get('sales/history', [SaleController::class, 'history'])->name('sales.history');
