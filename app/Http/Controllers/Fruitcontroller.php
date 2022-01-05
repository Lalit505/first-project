<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Fruit;

class FruitController extends Controller
{
    public function getFruit()
    {
        $fruit = Fruit::all();
        return view("fruit", compact('fruit'));
    }
    public function addFruit(Request $request)
    {
        $this->validate($request, [
            "name" => "required|min:3|max:10",
            "price" => "required",
        ]);

        $Fruit = new Fruit;
        $Fruit->name = $request->name;
        $Fruit->price = $request->price;
        $Fruit->save();
        $Fruit = Fruit::all();
        return view("Fruit", compact('Fruit'));
    }
    public function editFruit($id){
       $fruit=Fruit::find($id);
       return view("editfruit",compact('fruit'));
    }
    public function delete($id)
    {
        Fruit::find($id)->delete();
        $fruit = Fruit::all();

        return view("fruit", compact('fruit'));
    }


    public function update(request $request, $id)
    {
        $fruit = fruit::find($id);
        $fruit->name = $request->name;
        $fruit->price = $request->price;
        $fruit->save();
        $fruit = Fruit::all();
        return view("fruit", compact('fruit'));
    }
}
