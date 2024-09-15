<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Image;

class HomeController extends Controller
{
    // public function show() {
    //     $article= Article::whereNotNull('modified_at')->OrderBy('created_at', 'desc')->get();
    //     return view('home', ['articles' => $article]);
    // }

    public function index() {
        $articles = Article::whereNotNull('created_at')
        ->orderBy('modified_at' , 'desc')->limit(15)->get();
        // $side = Article::whereNotNull('created_at')
        // ->orderBy('title' , 'desc')->limit(5)->get();

        // $category = Article::join('categories', 'articles.category_id', '=', 'categories.id')
        // ->get(['articles.id', 'categories.name']);

        // $cat=$category::whereNotNull('name')->get();

        // $tag = Article::with("Tag")->get();
        $cat = Article::with('category')->get();
        return view('pages.blog',['articles' => $articles, 'cat'=>$cat]);
    }
    

    
}
