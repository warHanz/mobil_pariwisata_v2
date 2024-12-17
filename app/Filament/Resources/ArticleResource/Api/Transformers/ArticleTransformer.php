<?php
namespace App\Filament\Resources\ArticleResource\Api\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleTransformer extends JsonResource
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
            'article_category_id' => $this->article_category_id,
            'title' => $this->title,
            'slug' => $this->slug,
            'desc' => $this->desc,
            'img' => $this->img,
            'status' => $this->status,
            // 'publish_date' => $this->publish_date,
        ];
    }
}
