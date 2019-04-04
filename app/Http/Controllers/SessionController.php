<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $crendentials = $this->validate($request,[
            'email' => 'required|max:255|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($crendentials)){
            session()->flash('success','欢迎回来!');
            return redirect()->route('users.show',[Auth::user()]);
        }else{
            session()->flash('danger','抱歉,密码和邮箱不匹配!');
            return back()->withInput();
        }
    }
}
