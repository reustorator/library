<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MaterialsResource extends JsonResource
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
            'materials_id' => $this->id,
            'materials_name' => $this->name,
            'materials_author' => $this->author,
            'materials_type' => $this->type,
            'materials_category' => $this->category,
            'materials_description' => $this->description,
        ];
    }
}
