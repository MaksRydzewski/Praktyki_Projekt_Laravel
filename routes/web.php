<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::group([
    'prefix' => 'dishes'
], function () {
    Route::get('', [DishController::class, 'index']);
    Route::get('create', [DishController::class, 'create']);
    Route::post('create', [DishController::class, 'store']);
    Route::get('{id}', [DishController::class, 'show']);
    Route::patch('{id}', [DishController::class, 'update']);
});

