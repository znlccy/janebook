<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    /* 个人设置界面 */
    public function setting() {
        return view("user/setting");
    }

    /* 个人设置逻辑 */
    public function settingHandle() {
        dd(request()->all());
    }
}
