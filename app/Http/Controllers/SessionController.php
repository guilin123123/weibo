<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',[
           'only' => ['create'],
        ]);
    }

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

        if(Auth::attempt($crendentials,$request->has('remember'))){
            if(Auth::user()->activated){
                session()->flash('success','欢迎回来!');
                $fallback = route('users.show',Auth::user());
                return redirect()->intended($fallback);
            }else{
                Auth::logout();
                session()->flash('warning','您的账号尚未激活,请检查邮件中的激活链接进行激活!');
                return back();
            }

        }else{
            session()->flash('danger','抱歉,密码和邮箱不匹配!');
            return back()->withInput();
        }
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success','您已成功退出!');
        return redirect()->route('home');
    }
}
