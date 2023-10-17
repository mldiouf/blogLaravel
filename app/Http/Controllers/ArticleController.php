<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create()
    {
        //
            return view('article.create');
    }

    public function index(){
        // afficher la liste des articles
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            'categorie' => 'required',
        ]);
        $article = new Article();
        $article->titre = $request->titre;
        $article->contenu = $request->contenu;
        $article->categorie = $request->categorie;
        $article->save();

        return redirect()->route('dashboard')->with('status', 'votre article a ete bien enregistrer');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //afficher les champs d un article
        $article = Article::find($id);
        return view('article.show', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //modifier un article
        $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            'categorie' => 'required',
        ]);
        $article = Article::find($request->id);
        $article->titre = $request->titre;
        $article->contenu = $request->contenu;
        $article->categorie = $request->categorie;
        $article->update();

        return redirect()->route('article.index')->with('status', 'votre article a ete bien enregistrer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
