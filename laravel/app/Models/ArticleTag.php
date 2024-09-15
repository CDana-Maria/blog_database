<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{
    use HasFactory;

    protected $table = 'article_tag';

    public $timestamps = false;

    public function articles()
    {
        return $this->hasMany(Article::class, 'article_id');
    }
    public function tags()
    {
        return $this->hasMany(Tag::class, 'tag_id');
    }
}
