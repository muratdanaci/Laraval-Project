<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list()
    {
        $users = User::get();
        return view('users.list', compact('users'));
    }

    public function create() 
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->created_at = $request->created_at;
        $user->updated_at = $request->updated_at;
        $user->save();
        return redirect()->back();
    }

    public function edit ($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->created_at = $request->created_at;
        $user->updated_at = $request->updated_at;
        $user->save();
        return redirect()->back();
    }

    public function delete ($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }
}
