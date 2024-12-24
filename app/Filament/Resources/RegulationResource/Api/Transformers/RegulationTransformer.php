<?php
namespace App\Filament\Resources\RegulationResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class RegulationTransformer extends JsonResource
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
            'title' => $this->title,
            'desc' => $this->desc,
            'category' => $this->category,
        ];
    }
}
