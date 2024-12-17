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

    public static function getFromApi()
    {
        try {
            $response = Http::get('http://127.0.0.1:8080/api/admin/article-categories'); //

            if ($response->successful()) {
                $article_categories = $response->json()['article_category'] ?? [];

                return Arr::map($article_categories, function ($item) {
                    return Arr::only($item, ['id', 'name', 'slug']);
                });
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
