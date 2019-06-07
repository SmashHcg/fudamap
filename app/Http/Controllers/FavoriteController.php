<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    public function insert(Request $request)
    {
        DB::table('spots')->insert(
            [
                'spot_name' => '东三教学楼',
                'latitude' => 177.364,
                'longitude' => 172.456,
            ]
        );

        DB::table('spots')->insert(
            [
                'spot_name' => '东二教学楼',
                'latitude' => 157.364,
                'longitude' => 152.456,
            ]
        );
    }
}
