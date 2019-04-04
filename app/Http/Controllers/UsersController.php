<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function show(User $user)
    {
        return view('users.show',Compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
           'name' => 'required|max:50',
           'email' => 'required|email|unique:users|max:255',
           'password' => 'required|confirmed|min:6',
        ]);

        $user = User::create([
           'name' => $request->name,
           'password' => bcrypt($request->password),
           'email' => $request->email,
        ]);

        session()->flash('success','注册成功,欢迎您的到来!');
        return redirect()->route('users.show',[$user]);
    }
}
