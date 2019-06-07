<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Favorite extends JsonResource
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
            'favorite_id' => $this->favorite_id,
            'destinationName' => $this->destinationName,
            'departName' => $this->departName,
            'usingTime' => $this->usingTime,
            'vehicle' => $this->vehicle,
            'time' => $this->time,
            'distance' => $this->distance,
            'departLatitude' => $this->departLatitude,
            'departLongitude' => $this->departLongitude,
            'destinationLongitude' => $this->destinationLongitude,
            'destinationLatitude' => $this->destinationLatitude,
        ];
    }
}
