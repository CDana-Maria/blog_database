<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    // public function show($id){
    //     $article = Article::all();
    //     return view('article');

    // }

    public function index($id){
        $articles= Article::find($id);
        return view('pages.article', ['articles'=>$articles]);
    }
}


