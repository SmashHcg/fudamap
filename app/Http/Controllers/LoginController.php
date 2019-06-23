<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $name = $request->input('account');

        $password = $request->input('password');

        if (Auth::attempt(['name' => $name, 'password' => $password])) {
            // 认证通过...
            return response()->json(['msg' => 'success','account' => $name]);
        }
        else{
            return response()->json(['msg' => 'failed' , 'account' => $name]);
        }
    }

    public function reset(Request $request)
    {
        $name = $request->input('account');

        $oldPassword = $request->input('oldPassword');

        $newPassword = $request->input('newPassword');

        if (Auth::attempt(['name' => $name, 'password' => $oldPassword])) {
            // 认证通过...
            DB::table('users')
            ->where('name', $name)
            ->update(['password' => bcrypt($newPassword)]);


            return response()->json(['msg' => 'success', 'userAccount' => $name, 'newPassword' => $newPassword]);
        }
        else{
            return response()->json(['msg' => 'failed' , 'userAccount' => $name]);
        }
    }

    public function reseteng(Request $request)
    {
        $name = $request->input('account');

        $newPassword = $request->input('newPassword');

        DB::table('users')
            ->where('name', $name)
            ->update(['password' => bcrypt($newPassword)]);
    }
}
