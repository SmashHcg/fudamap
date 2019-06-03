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
        $name = $request->input('name');

        $password = $request->input('password');

        if (Auth::attempt(['name' => $name, 'password' => $password])) {
            // 认证通过...
            return response()->json(['msg' => 'success','account' => $name]);
        }
        else{
            return response()->json(['msg' => 'failed' , 'account' => $name]);
        }
    }
}
