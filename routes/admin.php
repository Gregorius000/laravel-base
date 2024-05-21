<?php

use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Customer\TransactionController;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'admin.'], function () {
    Route::resources([
        'product' => ProductController::class,
        'product-categories' => ProductCategoryController::class,
        'users' => UserController::class,
    ]);

    Route::group(['prefix' => '/transactions', 'as' => 'transactions.'], function () {
        Route::get('/', [TransactionController::class, 'index'])->name('index');
        Route::post('/process-transaction', [TransactionController::class, 'processTransaction'])->name('process-transaction');
    });
});
