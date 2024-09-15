<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    protected $fillable = [
        'id',
        'name',
        'size'
    ];

    /**
     * Assigning Image to article.
     */
    public function article() {
        return $this->hasOne(Article::class, 'article_id');
    }
}
