<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    /* 用户登录界面 */
    public function login() {
        return view('user/login');
    }

    /* 用户登录逻辑 */
    public function loginHandle(Request $request) {

        dd(request()->all());
        /* 验证参数 */
        $this->validate($request, [

        ]);
    }

    /* 用户退出逻辑 */
    public function logout() {

    }

}
