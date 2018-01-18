<?php

namespace App\Http\Controllers;

use App\PhoneNumbers;
use Illuminate\Http\Request;

class PhoneNumbersController extends Controller
{

    public function showAllPhoneNumbers()
    {
        return response()->json(PhoneNumbers::all());
    }

    public function showOnePhoneNumber($id)
    {
        return response()->json(PhoneNumbers::find($id));
    }

    public function create(Request $request)
    {
        /*$this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'
        ]);*/

        $phoneNumbers = PhoneNumbers::create($request->all());

        return response()->json($phoneNumbers, 201);
    }

    public function update($id, Request $request)
    {
        $phoneNumbers = PhoneNumbers::findOrFail($id);
        $phoneNumbers->update($request->all());

        return response()->json($phoneNumbers, 200);
    }

    public function delete($id)
    {
        PhoneNumbers::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}