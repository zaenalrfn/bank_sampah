<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\WasteSubmission;
use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        $totalArticles = Article::count();
        $totalSetoranSampah =
            WasteSubmission::sum('weight');
        $totalPengguna = User::count();
        return view('welcome', compact('totalArticles', 'totalSetoranSampah', 'totalPengguna'));
    }
}
