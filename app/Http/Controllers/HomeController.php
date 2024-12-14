<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\WasteSubmission;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $user = Auth::user();
        $totalArticles = Article::count();
        $totalSetoranSampah =
            WasteSubmission::sum('weight');
        $totalPengguna = User::count();
        $totalSetoranSampahUser = WasteSubmission::where('user_id', $user->id)->count();
        return view('welcome', compact('totalArticles', 'totalSetoranSampah', 'totalPengguna', 'totalSetoranSampahUser'));
    }
}
