<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Spot extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'spot_id' => $this->spot_id,
            'spot_name' => $this->spot_name,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'spot_img' => $this->spot_img,
        ];
    }
}
