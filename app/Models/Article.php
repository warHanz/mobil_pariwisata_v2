<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Arr;
use App\Models\ArticleCategory;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
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
                        return Arr::only($item, ['id', 'user_id', 'article_category_id', 'title', 'slug', 'desc', 'img', 'status', 'views', 'publish_date']);
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

    protected static function booted()
    {
        static::creating(function ($article) {
            if (auth()->check()) {
                $article->user_id = auth()->id();
            }
        });
        static::deleting(function ($article) {
            if ($article->img && Storage::disk('public')->exists($article->img)) {
                Storage::disk('public')->delete($article->img);
            }
        });

        static::updating(function ($article) {
            if ($article->isDirty('img') && $article->getOriginal('img') !== $article->img) {
                $oldImage = $article->getOriginal('img');
                if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });
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
