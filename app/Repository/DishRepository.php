<?php
namespace App\Repository;
use App\Models\Dish;


class DishRepository {
    public function __construct(Dish $dish)
    {
        $this->model = $dish;
    }
    

    public function find(int $id): ?Dish
    {
        return $this-model->where('id', $id)->first();
    }

    public function save(Dish $dish)
    {
        $dish->save();
    }

    public function updateDish(Dish $dish,Request $request, int $id)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $dish = Dish::find($id);
        
        if ($dish) {
            $dish->type = $request->input('type');
            $dish->name = $request->input('name');
            $dish->price = $request->input('price');
            $dish->description = $request->input('description');
            $dish->save();
            
            return $dish;
        }
    }

    public function create(){
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
    }
}