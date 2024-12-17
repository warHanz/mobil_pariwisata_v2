<?php
namespace App\Filament\Resources\VehicleResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class VehicleTransformer extends JsonResource
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
