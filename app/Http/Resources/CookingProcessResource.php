<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CookingProcessResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return array_merge(parent::toArray($request),
            ['photo_url' => env('APP_URL').'/storage'.'/cookingProcess'.$this->photo]);
    }
}
