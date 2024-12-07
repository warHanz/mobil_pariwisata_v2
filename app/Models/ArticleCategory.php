<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticleCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRows()
    {
        try {
            $response = Http::get('http://127.0.0.1:8080/api/admin/article-categories');

            if ($response->successful()) {
                $article_category = $response->json();

                if (isset($article_category['article_category']) && is_array($article_category['article_category'])) {
                    return Arr::map($article_category['article_category'], function ($item) {
                        return Arr::only($item, ['id', 'name', 'slug']);
                    });
                } else {
                    return [];
                }
            } else {
                return [];
            }
        } catch (\Exception $e) {
            return [];
        }
    }

    //relation has many category ke article
    public function Articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
