<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;

Route::group([
    'prefix' => 'dishes'
], function () {
    Route::get('index', [DishController::class, 'index'])->name('dishes');
    Route::get('create', [DishController::class, 'create', 'index']);
    Route::get('edit/{id}', [DishController::class, 'showData']);
    Route::post('edit', [DishController::class, 'update']);
    Route::post('delete/{id}', [DishController::class, 'delete']);

    ///Route::get('{id}', [DishController::class, 'show'])->name('dishes');
    //Route::delete('{id}', [DishController::class, 'delete']);
    //Route::put('/dishes/{dish}', [DishController::class, 'update'])->name('dishes.update');
    //Route::post('', [DishController::class, 'store']);
});

