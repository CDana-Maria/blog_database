<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = [
        'id',
        'message',
        'user_id',
        'article_id'
    ];


    /**
     * The comments that belong to the articles.
     */
    public function article() {
        return $this->belongsTo(Article::class, 'article_id');
    }


    /**
     * The comments that belong to the user.
     */
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
