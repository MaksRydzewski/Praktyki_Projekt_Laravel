<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;

Route::group([
    'prefix' => 'dishes'
], function () {
    Route::get('index', [DishController::class, 'index'])->name('dishes');
    Route::get('create', [DishController::class, 'create']);
    Route::get('edit/{id}', [DishController::class, 'showData']);
    Route::patch('edit/{id}', [DishController::class, 'update'])->name('dishes.update');
    Route::delete('delete/{id}', [DishController::class, 'delete']);
    Route::post('', [DishController::class, 'store']);
    
    ///Route::get('{id}', [DishController::class, 'show'])->name('dishes');
    //Route::delete('{id}', [DishController::class, 'delete']);
    //Route::put('/dishes/{dish}', [DishController::class, 'update'])->name('dishes.update');

});

