<?php
namespace App\Filament\Resources\PackageTourResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class PackageTourTransformer extends JsonResource
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
            'package_category_id' => $this->package_category_id,
            'title' => $this->title,
            'slug' => $this->slug,
            'desc' => $this->desc,
            'img' => $this->img,
            'status' => $this->status,
            'views' => $this->views,
            'publish_date' => $this->publish_date,
            'updated_at' => $this->updated_at,
        ];
    }
}
