<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\ArticleCategory;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function blog()
    {
        $config = [
            'og_description' => null, // Hapus meta
        ];

        // Mendapatkan keyword dari request
        $keyword = request()->keyword;

        if ($keyword) {
            // Mengambil artikel dengan relasi 'ArticleCategory' dan 'User'
            $articles = Article::with(['ArticleCategory', 'User'])
                ->whereStatus(1)
                ->where('title', 'like', '%' . $keyword . '%')
                ->latest()
                ->paginate(3); // Pastikan hanya paginate yang digunakan
        } else {
            // Jika tidak ada keyword, ambil artikel terbaru tanpa filter
            $articles = Article::with(['ArticleCategory', 'User'])
                ->whereStatus(1)
                ->latest()
                ->paginate(4); // Gunakan paginate yang sama
        }

        // Mengambil artikel terbaru
        $latest_post = Article::latest()->first();

        // Mengambil semua kategori artikel
        $article_categories = ArticleCategory::latest()->get();

        return view('frontend.article.index', [
            'latest_post' => $latest_post,
            'articles' => $articles,
            'keyword' => $keyword,
            'article_categories' => $article_categories,
        ]);
    }

    public function show($slug)
    {
        // Mencari artikel berdasarkan slug
        $article = Article::with(['ArticleCategory', 'User']) // Eager load 'ArticleCategory' dan 'User'
            ->whereSlug($slug)
            ->firstOrFail();

        // Increment view count
        $article->increment('views');

        // Mengambil semua kategori artikel
        $article_categories = ArticleCategory::latest()->get();

        return view('frontend.article.show', [
            'article' => $article,
            'article_categories' => $article_categories,
        ]);
    }
}
