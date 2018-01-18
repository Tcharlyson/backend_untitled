<?php

namespace App\Http\Controllers;

use App\Groups;
use Illuminate\Http\Request;

class GroupsController extends Controller
{

    public function showAllGroups()
    {
        return response()->json(Groups::all());
    }

    public function showAllGroupsWithUsers()
    {
        return response()->json(Groups::with('users')->get());
    }

    public function showOneGroupWithUsers($id)
    {
        return response()->json(Groups::with('users')->where(['id' => $id])->get());
    }

    public function showOneGroup($id)
    {
        return response()->json(Groups::find($id));
    }

    public function create(Request $request)
    {
        /*$this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'
        ]);*/

        $group = Groups::create($request->all());

        return response()->json($group, 201);
    }

    public function update($id, Request $request)
    {
        $group = Groups::findOrFail($id);
        $group->update($request->all());

        return response()->json($group, 200);
    }

    public function delete($id)
    {
        Groups::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}