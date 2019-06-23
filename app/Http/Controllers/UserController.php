<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Resources\User as UserResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show ($id)
    {
        return new UserResource(User::find($id));
    }

    public function pass_reset(Request $request)
    {
        $account = $request->input('userAccount');

        $oldPassword = $request->input('oldPassword');

        $newPassword = $request->input('newPassword');

        if (Auth::attempt(['name' => $account, 'password' => $oldPassword])) {
            // 认证通过...
            DB::table('users')
            ->where('name', $account)
            ->update(['password' => $newPassword]);

            return response()->json(['msg' => 'success','userAccount' => $account,'newPassword' => $newPassword]);
        }
        else{
            return response()->json(['msg' => 'failed' , 'userAccount' => $account]);
        }
    }
}
