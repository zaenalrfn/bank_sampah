<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class LandingController extends Controller
{
    public function index()
    {
        // Ambil 4 artikel terbaru
        $latestArticles = Article::orderBy('created_at', 'desc')->take(3)->get();

        // Kirim data ke view
        return view('landing.landingpage', ['latestArticles' => $latestArticles]);
    }
    public function allBlog()
    {
        $artikel = Article::paginate(10);
        return view('landing.blog', compact('artikel'));
    }
}
