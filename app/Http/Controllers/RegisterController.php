<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /* 用户注册页面 */
    public function register() {
        return view('user/register');
    }

    /* 用户注册逻辑 */
    public function registerHandle() {
        dd(request()->all());
    }

}
