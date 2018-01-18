<?php

namespace App\Http\Controllers;

use App\Emails;
use Illuminate\Http\Request;

class EmailsController extends Controller
{

    public function showAllEmails()
    {
        return response()->json(Emails::all());
    }

    public function showOneEmail($id)
    {
        return response()->json(Emails::find($id));
    }

    public function create(Request $request)
    {
        /*$this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'
        ]);*/

        $email = Emails::create($request->all());

        return response()->json($email, 201);
    }

    public function update($id, Request $request)
    {
        $email = Emails::findOrFail($id);
        $email->update($request->all());

        return response()->json($email, 200);
    }

    public function delete($id)
    {
        Emails::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}