<?php

namespace App\Http\Controllers;

use App\Types;
use Illuminate\Http\Request;

class TypesController extends Controller
{

    public function showAllTypes()
    {
        return response()->json(Types::all());
    }

    public function showOneType($id)
    {
        return response()->json(Types::find($id));
    }

    public function create(Request $request)
    {
        /*$this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'
        ]);*/

        $types = Types::create($request->all());

        return response()->json($types, 201);
    }

    public function update($id, Request $request)
    {
        $types = Types::findOrFail($id);
        $types->update($request->all());

        return response()->json($types, 200);
    }

    public function delete($id)
    {
        Types::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}