<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //afficher le dashboard
    public function dashboard(){
        $articles = Article::all();
        return view('dashboard', compact('articles'));
    }

    // deconnecter

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
