<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Repository\DishRepository;

class DishController extends Controller
{
    protected $dishRepository;

    public function __construct(DishRepository $dishRepository)
    {
        $this->dishRepository = $dishRepository;
    }

    public function index()
    {
        $dishes = Dish::all();

        return view('dishes.index',['dishes'=>$dishes]);
    }

    public function create(Request $request): View
    {
        return view('dishes.create');
    }

    public function delete(Request $request, int $id, DishRepository $dishRepository)
    {
        $dish = $dishRepository->find($id);
        $dishRepository->delete(
            $dish
        );

        return redirect('dishes/index');

    }

    public function store(Request $request,DishRepository $dishRepository): RedirectResponse
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
            $dish= Dish::find($id);
            return view('dishes.edit',['dish'=> $dish]);

        }

        public function update(Request $request, int $id,DishRepository $dishRepository)
    {
            $updatedDish = $this->dishRepository->updateDish($request, $id);
    

        return redirect()->route('dishes');

}
}
