<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Database\Eloquent\Builder;

class CategoryController extends Controller
{
    public function index($slugCategory)
    {
        return view('frontend.category.index', [
            'articles' => Article::with('ArticleCategory')
                ->where('status', 1)
                ->whereHas('ArticleCategory', function ($q) use ($slugCategory) {
                    $q->where('slug', $slugCategory);
                })
                ->latest()
                ->paginate(9),
            'article_category' => $slugCategory,
        ]);
    }

    public function allcategory()
    {
        $article_category = ArticleCategory::withCount([
            'Articles' => function (Builder $query) {
                $query->where('status', 1);
            },
        ])
            ->latest()
            ->get();
        return view('frontend.category.all-category', [
            'category' => $article_category,
        ]);
    }
}
