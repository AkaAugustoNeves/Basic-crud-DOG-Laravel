<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;

class DogController extends Controller
{

    public function index()
    {
        return DOG::all();
    }

    public function store(Request $request)
    {
        return Dog::create($request->all());
    }

    public function show($id)
    {
        return Dog::findOrFail($id);
    }
    
    public function update(Request $request, $id)
    {
        $dog = Dog::findOrFail($id);
        $result = $dog->update($request->all());
        return $result;
        //
    }

    public function destroy($id)
    {
        $dog = Dog::findOrFail($id);
        $result = $dog->delete();
        return $result;
    }
}
