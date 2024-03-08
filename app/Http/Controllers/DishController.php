<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;
use Illuminate\View\dishes;

class DishController extends Controller
{
    public function show(): View
    {
        return view('dishes');
    }
}
