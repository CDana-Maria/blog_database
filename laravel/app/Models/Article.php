<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'id',
        'title',
        'short_description',
        'content',
        'image_id'
    ];

    /**
     * The articles that belong to the user.
     */

    public function author() {
        return $this->belongsTo(User::class, 'author_id');
    }
/**
     * The article that belongs to the image.
     */
    public function image() {
        return $this->belongsTo(Image::class, 'article_id');
    }

/**
     * The articles that belong to the tags.
     */
    public function tag() {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * The articles that belong to the category.
     */
    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * Assigning articles to comments.
     */

    public function comment() {
        return $this->hasMany(Comment::class, 'article_id', 'id');
    }
}
