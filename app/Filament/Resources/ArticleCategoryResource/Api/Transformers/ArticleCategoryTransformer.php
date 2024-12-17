<?php
namespace App\Filament\Resources\ArticleCategoryResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleCategoryTransformer extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return $this->resource->toArray();

        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
        ];
    }
}