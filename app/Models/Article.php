<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Arr;
use App\Models\ArticleCategory;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRows()
    {
        try {
            $response = Http::get('http://127.0.0.1:8080/api/admin/articles'); //
            if ($response->successful()) {
                $article = $response->json();

                if (isset($article['article']) && is_array($article['article'])) {
                    return Arr::map($article['article'], function ($item) {
                        return Arr::only($item, ['id', 'article_category_id', 'title', 'slug', 'desc', 'img', 'status', 'views', 'publish_date']);
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

    //relation ke user
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    //relation ke categories
    public function ArticleCategory(): BelongsTo
    {
        return $this->belongsTo(ArticleCategory::class, 'article_category_id');
    }
}
