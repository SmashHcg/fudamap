<?php

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserCollection;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/users/{id}', 'UserController@show');
Route::get('/users', function () {
    return new UserCollection(User::all());
});
//登录用户接口认证
Route::get('/login', 'LoginController@authenticate');
