<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfowisataController extends Controller
{
    public function infowisata()
    {
        // Mendapatkan keyword dari request
        $keyword = request()->keyword;

        // Jika keyword ada, kita filter berdasarkan judul artikel
        if ($keyword) {
            // Mengambil artikel dengan relasi 'ArticleCategory' dan 'User'
            $articles = Article::with(['ArticleCategory', 'User'])
                ->whereStatus(1)
                ->where('title', 'like', '%' . $keyword . '%')
                ->latest()
                ->paginate(2); // Pastikan hanya paginate yang digunakan
        } else {
            // Jika tidak ada keyword, ambil artikel terbaru tanpa filter
            $articles = Article::with(['ArticleCategory', 'User'])
                ->whereStatus(1)
                ->latest()
                ->paginate(2); // Gunakan paginate yang sama
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
