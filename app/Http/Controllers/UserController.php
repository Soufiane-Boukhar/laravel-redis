<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUserFromCache($id)
    {
        $user = Cache::get("user_{$id}");

        if (!$user) {
            $user = User::find($id);
            Cache::put("user_{$id}", $user, 10);
        }

        return view('user.show', ['user' => $user]);
    }

    public function createUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('user.show', ['id' => $user->id]);
    }

    public function create()
    {

        return view('user.create');
    }

}
