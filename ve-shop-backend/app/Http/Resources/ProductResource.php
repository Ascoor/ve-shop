<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request): array
    {
        $locale = app()->getLocale();

        return [
            'id' => $this->id,
            'name' => $this->{'name_'.$locale} ?? $this->name_en,
            'description' => $this->{'description_'.$locale} ?? $this->description_en,
            'price' => $this->price,
            'stock' => $this->stock,
            'image_url' => $this->image_path ? url($this->image_path) : null,
            'created_at' => $this->created_at,
        ];
    }
}
