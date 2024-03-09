<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DishController extends Controller
{
    public function index(Request $request): View
    {
        $dishes = [];
        return view('dishes.index', compact('dishes'));
    }

    public function create(Request $request): View
    {
        return view('dishes.create');
    }

    public function show(Request $request, int $id): View
    {
        $dish = '';

        return view('dishes.show', compact('dish'));
    }

    public function delete(Request $request, int $id): RedirectResponse
    {
        return redirect('dishes');
    }

    public function store(Request $request): RedirectResponse
    {
        $dish = new Dish();
        $dish->type = $request->input('type');
        $dish->name = $request->input('name');
        $dish->description = $request->input('description');
        $dish->price = $request->input('price');
        $dish->save();

        return redirect('dishes');
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        return redirect('dishes');
    }
}
