<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class FavoriteCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $count = User::where('name', '=', Input::get('account'));
        return [
            'recordNum' => $count,
            'data' => $this->collection,
            ];
    }
}
