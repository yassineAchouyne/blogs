<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        $resarticles = Article::orderBy('created_at', 'desc')->take(3)->get();
        $categories = Categorie::all();
        return view('accueil',compact('articles','categories', 'resarticles'));
    }
    public function all()
    {
        $articles = Article::all();
        $resarticles = Article::orderBy('created_at', 'desc')->take(3)->get();
        $categories = Categorie::all();
        return view('articles', compact('articles', 'categories', 'resarticles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
            return view('article.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
    ]);
    $article = new Article();
    $article->title = $request->title;
    $article->content = $request->content;
    $article->save();
    return redirect()->route('article.create')->with('success', 'Article created successfully.');


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $articles = Article::orderBy('created_at', 'desc')->take(3)->get();
        $article  = Article::find($id);
        $categories = Categorie::all();
        return view('details', compact('article', 'articles', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }


}
