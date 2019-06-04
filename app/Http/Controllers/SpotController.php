<?php

namespace App\Http\Controllers;

use App\Models\Spot;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\Spot as SpotResource;

class SpotController extends Controller
{
    public function show ($spot_id)
    {
        return new UserResource(Spot::find($spot_id));
    }

    public function insert1()
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
