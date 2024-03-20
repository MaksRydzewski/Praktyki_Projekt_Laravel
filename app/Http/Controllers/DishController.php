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

    public function delete(Request $request, int $id)
    {
        $data=Dish::find($id);
        $data->delete();
        return redirect('dishes/index');
        
    }

    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $dish = new Dish();
        $dish->type = $request->input('type');
        $dish->name = $request->input('name');
        $dish->description = $request->input('description');
        $dish->price = $request->input('price');
        $dish->save();


        return redirect()->route('dishes');
    }

        function showData($id)
        {
            $data= Dish::find($id);
            return view('dishes.edit',['data'=>$data]);

        }

        public function update(Request $request, int $id)
    {

        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $data = Dish::find($id);

        // Sprawdź, które pola są przekazane
        $type = $request->input('type') ?? $data->type;
        $name = $request->input('name') ?? $data->name;
        $price = $request->input('price') ?? $data->price;
        $description = $request->input('description') ?? $data->description;
    
        // Aktualizuj dane tylko jeśli zostały przekazane
        $data->type = $type;
        $data->name = $name;
        $data->price = $price;
        $data->description = $description;
        $data->save();
    
        // Zwróć odpowiednią wiadomość w zależności od brakujących danych
        if (!$type || !$name || !$price || !$description) {
            return redirect()->back()->with('error', 'Niektóre wymagane dane są brakujące.');
        }

        return redirect()->route('dishes');

        }
}
