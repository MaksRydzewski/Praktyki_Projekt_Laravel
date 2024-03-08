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
Route::get('/dishes', [DishController::class, 'show']);


//TEST POŁĄCZENIA Z BAZĄ
/*Route::get('/connection',function(){
    try{
        DB::connection()->getPdo();
        return 'connected sucly';
    }
    catch(\Exception $ex)
    {
        dd($ex->getMessage());
    }
});*/