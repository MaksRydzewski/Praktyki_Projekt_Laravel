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
       /* $products =DB::table('products')
        ->orderBy('id', 'asc')
        ->lists('id','type','name','description','price');
        return View::make('dishes.index', array('products'=>$products));
        */$dishes = [];
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
        $request=Dish::find($id);

        if ($request)
        {

            $request->delete();
            echo "Użytkownik został pomyślnie usunięty.";
            
        }else{

            echo "Użytkownik o podanym identyfikatorze nie istnieje.";
        }

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
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $rekord = DishController::find($id);

        if ($rekord) {
            $rekord->type = $request->input('type');
            $rekord->name = $request->input('name');
            $rekord->description = $request->input('description');
            $rekord->price = $request->input('price');
            $rekord->save();

            return redirect()->route('')->with('success', 'Rekord został zaktualizowany pomyślnie.');
        } else {
            return redirect()->route('')->with('error', 'Nie znaleziono rekordu o podanym identyfikatorze.');
        }
        return redirect('dishes');
    }
}
