<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('accueil', compact('articles', 'categories', 'resarticles'));
    }
    public function dashboard()
    {
        $articles = Article::all();
        $categories = Categorie::all();

        return view('admin.dashboard', compact('articles', 'categories'));
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
        // return $request;
        $article = new Article();
        $article->title = $request->title;
        $article->user_id = Auth::id();
        $article->content = $request->content;
        $article->tag = $request->tag;
        $article->keyword = $request->keyword;
        $article->categorie_id = $request->categorie;
        $article->date = date('Y-m-d');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('images', $filename, 'public');
            $article->image = $path;
        }
        $article->save();
        return back()->with('success', 'Article add successfully');
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
        // return $request;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->tag = $request->tag;
        $article->keyword = $request->keyword;
        $article->categorie_id = $request->categorie;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('images', $filename, 'public');

            $article->image = $path;
        }
        $article->save();
        return back()->with('success', 'Article updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return back()->with('success', 'Article deleted successfully');
    }
}
