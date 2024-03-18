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

    public function delete(Request $request)
    {
        $data=Dish::find($id);
        $data->delete();
        return redirect('dishes.index');
        
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

        function showData($id)
        {
            $data= Dish::find($id);
            return view('dishes.edit',['data'=>$data]);

        }

        public function update(Request $request, int $id)
    {

        $data=Dish::find($req->id);
        $data->type=$req->type;
        $data->name=$req->name;
        $data->price=$req->price;
        $data->description=$req->description;
        $data->save();
        return redirect('index');

    }
}
