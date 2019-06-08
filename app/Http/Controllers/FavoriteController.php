<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Favorite;

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
        $destinationLaitude = $request->input('endLatitude');
        $destinationLongitude = $request->input('endLogitude');

        $add = DB::table('favorites')->insert([
            'user_name' => $user_name,
            'destinationName' => $destinationName,
            'departName' => $departName,
            'destinationLongitude' => $destinationLongitude,
            'destinationLaitude' => $destinationLaitude,
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
}
