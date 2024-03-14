<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group([
    'prefix' => 'dishes'
], function () {
    Route::get('/index', [DishController::class, 'index'])->name('dishes');
    //Route::post('', [DishController::class, 'store']);
    Route::get('/create', [DishController::class, 'create', 'index']);
    ///Route::get('{id}', [DishController::class, 'show'])->name('dishes');
    //Route::delete('{id}', [DishController::class, 'delete']);
    //Route::put('/dishes/{dish}', [DishController::class, 'update'])->name('dishes.update');
    //Route::get('edit/{id}', [DishController::class, 'showData']);
});

