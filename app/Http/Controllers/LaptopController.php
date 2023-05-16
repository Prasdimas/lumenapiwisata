<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;

class LaptopController extends Controller
{
    public function showAll()
    {
        return response()->json(Laptop::all());
    }

    public function showOne($id)
    {
        return response()->json(Laptop::find($id));
    }

    public function create(Request $request)
    {
        $Laptop = Laptop::create($request->all());

        return response()->json($Laptop, 201);
    }

    public function update($id, Request $request)
    {
        $Laptop = Laptop::findOrFail($id);
        $Laptop->update($request->all());

        return response()->json($Laptop, 200);
    }

    public function delete($id)
    {
        Laptop::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
