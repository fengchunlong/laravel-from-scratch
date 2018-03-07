<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\Request;
use App\User;
use App\Mail\Welcome;

class RegistrationController extends Controller
{
    /**
     * 显示注册页面
     */
    public function create()
    {
        return view('registration/create');
    }

    /**
     * 提交注册
     */
    public function store(RegistrationRequest $request)
    {

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);


        auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));

        session()->flash('massage','Thanks so much for signing up');

        return redirect()->home();

    }



}
