<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Furniture;

class FurnitureController extends Controller
{
    public function getfurniture()
    {
        $furniture = Furniture::all();
        return view("furniture", compact('furniture'));
    }
    public function addFurniture(Request $request)
    {
        $this->validate($request, [
            "name" => "required|min:3|max:10",
            "price" => "required",
        ]);

        $Furniture = new Furniture;
        $Furniture->name = $request->name;
        $Furniture->price = $request->price;
        $Furniture->save();
        $furniture = Furniture::all();
        return view("Furniture", compact('furniture'));
    }
    public function editFurniture($id){
       $furniture=Furniture::find($id);
       return view("editfurniture",compact('furniture'));
    }
    public function delete($id)
    {
        Furniture::find($id)->delete();
        $furniture = Furniture::all();

        return view("furniture", compact('furniture'));
    }


    public function update(request $request, $id)
    {
        $furniture = furniture::find($id);
        $furniture->name = $request->name;
        $furniture->price = $request->price;
        $furniture->save();
        $furniture = Furniture::all();
        return view("furniture", compact('furniture'));
    }
}
