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
        $account = $request->input('account');

        return [
            'account' => $account,
            'recordNum' => $this->collection->count(),
            'record' => $this->collection,
            ];
    }
}
