<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Database\Eloquent\Builder;

class SideWidgetProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('layouts.frontend', function ($view) {
            $article_categories = ArticleCategory::latest()->get();

            $view->with('article_categories', $article_categories);
        });

        View::composer('layouts.side-widgets', function ($view) {
            $posts = Article::orderBy('views', 'desc')->take(3)->get();

            $view->with('popular_posts', $posts);
        });

        View::composer('layouts.side-widgets', function ($view) {
            //     $category = Category::whereHas('Articles', function (Builder $query) {
            //         $query->where('status', 1);
            //     })
            //         ->withCount([
            //             'Articles' => function ($query) {
            //                 $query->where('status', 1);
            //             },
            //         ])
            //         ->latest()
            //         ->get();

            //     $view->with('categories', $category);
            // });
            $article_categories = ArticleCategory::withCount([
                'Articles' => function (Builder $query) {
                    $query->where('status', 1);
                },
            ])
                ->latest()
                ->get();

            $view->with('article_categories', $article_categories);
        });
    }
}
