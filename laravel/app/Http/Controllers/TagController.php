<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use App\Models\ArticleTag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index($id){
    // {
    //     // $tags = Tag::find($id);
    //     // $articles=Article::find();
    //     // return view ('pages.tag', ['tags'=>$tags, 'articles'=>$articles]);

    //     $tags = Tag::join('articles_tags', 'tags.id', '=', 'articles_tags.tag_id')
    //     ->join('articles', 'articles.id', '=', 'articles_tags.article_id')
    //     ->where('tags.id','=', $id)
    //     ->get(['tags.name', 'articles.title', 'articles.short_description', 'articles.content']);
        
    //     $tagos =$this->$tags->where('id', $id)->with('articles')->first();
    //     return view ('pages.tag', ['tags'=>$tagos]);

    //     $tags=Tag::findOrFail($id)->articles;
           
//         return view ('pages.tag', ['tags'=>$tags]);
// } 

 $tags = Tag::findOrFail($id);
 $articles=Article::all();
 $a_t=ArticleTag::all();

  return view ('pages.tag', ['tags'=>$tags, 'articles'=>$articles, 'a_t'=>$a_t]);



}


}

