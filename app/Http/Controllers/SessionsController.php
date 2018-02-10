<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['except'=>'destroy']);
    }

    /**
     * 显示登录页面
     */
    public function create()
    {
        return view('sessions.create');
    }

    /**
     * 退出登录
     */
    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }

    public function store()
    {
        if(! auth()->attempt(request(['email','password']))){
            return back()->withErrors([
                'message' => '用户名和密码不匹配'
            ]);
        }

        return redirect()->home();

    }

}
