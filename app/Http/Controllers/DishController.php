<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DishController extends Controller
{
    public function index()
    {
        $dishes = Dish::all();

        return view('dishes.index',['dishes'=>$dishes]);
    }

    public function create(Request $request): View
    {
        return view('dishes.create');
    }

    /*public function show(Request $request, int $id): View
    {
    //TODO: wysweitlic danie o podanym id
        $dish = '';

        return view('dishes.show', compact('dish'));
    }*/

    public function delete(Request $request, int $id): RedirectResponse
    {
        //TODO: zrobic walidacje sprawdzic zy istnieje i usunać
        $dish = Dish::find($id);
        $dish->delete();
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

            $dish=Dish::findOrFail($id);

            $validatedData = $request->validate([
            'type' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $dish= Dish::findOrFail($id);

        $dish->update($validatedData);

        return redirect('/dishes/index')->with('success', 'Dish updated successfully!');

        function showData($id)
        {
            return Dish::find($id);
        }
}
}