<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PromotionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'is_pupular' => $this->is_pupular,
            'start_date_of_the_promotion' => $this->start_date_of_the_promotion,
            'end_date_of_the_promotion' => $this->end_date_of_the_promotion,
        ];
    }
}
