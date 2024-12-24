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

    protected $fillable = ['name', 'slug'];

    //relation has many category ke article
    public function Articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
