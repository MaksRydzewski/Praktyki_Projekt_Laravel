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

Route::get('/firstpage', function () {
    return view('dishes.firstpage');
});

Route::get('/update', function () {
    return view('dishes.update');
});

Route::get('/delete', function () {
    return view('dishes.delete');
});

Route::group([
    'prefix' => 'dishes'
], function () {
    Route::get('', [DishController::class, 'index']);
    Route::post('', [DishController::class, 'store']);
    Route::get('create', [DishController::class, 'create']);
    Route::get('{id}', [DishController::class, 'show']);
    Route::patch('{id}', [DishController::class, 'update']);
    Route::delete('{id}', [DishController::class, 'delete']);
});

