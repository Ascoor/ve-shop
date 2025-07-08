<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    public function toArray($request): array
    {
        $locale = app()->getLocale();

        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'name' => $this->{'name_'.$locale} ?? $this->name_en,
            'description' => $this->{'description_'.$locale} ?? $this->description_en,
            'parent_id' => $this->parent_id,
            'created_at' => $this->created_at,
        ];
    }
}
