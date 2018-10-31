<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{

    /* 用户登录界面 */
    public function login() {
        return view('user/login');
    }

    /* 用户登录逻辑 */
    public function loginHandle() {

        /* 验证 */
        $this->validate(request(), [
            'email'      => 'required|email',
            'password'   => 'required|min:6|max:12',
            'is_remember'=> 'integer'
        ]);

        /* 逻辑 */
        $user = request(['email', 'password']);
        $is_remember = boolval(request('is_remember'));
        if (Auth::attempt($user, $is_remember)) {
            return redirect('/article');
        }

        /* 渲染 */
        return Redirect::back()->withErrors("邮箱密码不匹配");
    }

    /* 用户退出逻辑 */
    public function logout() {
        Auth::logout();
        return redirect('/user/login');
    }

}
