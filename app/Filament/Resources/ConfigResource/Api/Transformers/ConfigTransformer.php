<?php
namespace App\Filament\Resources\ConfigResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class ConfigTransformer extends JsonResource
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
            'value' => $this->value,
        ];
    }
}
