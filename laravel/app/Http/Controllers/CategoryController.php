<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Article;

class CategoryController extends Controller
{
    public function index($id) {
       $category = Category::find($id);
       $articles = Article::where('category_id', '=', $id)
       ->orderBy('modified_at' , 'desc')->get();
        return view('pages.category', [ 'category'=>$category, 'articles' => $articles]);
    }
}
