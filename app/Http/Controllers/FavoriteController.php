<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Favorite;
use App\Models\User;
use App\Http\Resources\Favorite as FavoriteResource;
use App\Http\Resources\FavoriteCollection;

class FavoriteController extends Controller
{
    public function insert(Request $request)
    {
        $vehicle = $request->input('mode');
        $time = $request->input('time');
        $departName = $request->input('beginLocation');
        $destinationName = $request->input('endLocation');
        $usingTime = $request->input('takeTime');
        $distance = $request->input('distance');
        $user_name = $request->input('userAccount');
        $departLatitude = $request->input('beginLatitude');
        $departLongitude = $request->input('beginLogitude');
        $destinationLatitude = $request->input('endLatitude');
        $destinationLongitude = $request->input('endLogitude');

        $add = DB::table('favorites')->insert([
            'user_name' => $user_name,
            'destinationName' => $destinationName,
            'departName' => $departName,
            'destinationLongitude' => $destinationLongitude,
            'destinationLatitude' => $destinationLatitude,
            'departLongitude' => $departLongitude,
            'departLatitude' => $departLatitude,
            'usingTime' => $usingTime,
            'time' => $time,
            'vehicle' => $vehicle,
            'distance' => $distance
        ]);

        if($add) {
            return response()->json(['msg' => 'success']);
        }
        else {
            return response()->json(['msg' => 'failed']);
        }
    }

    public function show(Request $request)
    {
        $name = $request->input('account');

        return new FavoriteCollection(
            Favorite::where('user_name', $name)
                    ->orderBy('favorite_id')
                    ->get()
                );
    }
}
