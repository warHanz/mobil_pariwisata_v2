<?php
namespace App\Filament\Resources\PackageCategoryResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class PackageCategoryTransformer extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->resource->toArray();
    }
}
