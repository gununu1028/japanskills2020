<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShopResource extends JsonResource
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
            'id' => $this->id,
            'photo' => $this->photo,
            'name' => $this->name,
            'opening_time' => $this->opening_time->format('G:i'), // Hで0埋め。Gで0埋めしない。
            'closing_time' => $this->closing_time->format('G:i'),
            'price_range' => $this->price_range
        ];
    }
}
