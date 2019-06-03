<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /**
     * 处理身份认证尝试.
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        if (Auth::attempt(['name' => $request->route('name'), 'password' => $request->route('password')])) {
            // 认证通过...
            echo 'success';
        }
        else{
            echo 'failed';
        }
    }
}
