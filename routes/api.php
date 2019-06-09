<?php

use Illuminate\Http\Request;
use App\Models\Spot;
use App\Models\User;
use App\Http\Resources\SpotCollection;
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
Route::post('/login', 'LoginController@authenticate');
//景点标记接口
Route::get('/spots/{id}', 'SpotController@show');
Route::post('/spots', function () {
    return new SpotCollection(Spot::all());
});
//路径界面
Route::post('/path', 'FavoriteController@insert');
Route::get('/favorites', 'FavoriteController@show');
