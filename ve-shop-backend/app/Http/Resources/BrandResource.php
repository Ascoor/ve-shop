<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BrandResource extends JsonResource
{
    public function toArray($request): array
    {
        $locale = app()->getLocale();

        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'name' => $this->{'name_'.$locale} ?? $this->name_en,
            'logo' => $this->logo,
            'created_at' => $this->created_at,
        ];
    }
}
