<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';
    
    protected $fillable = [
        'id',
        'name'
    ];
/**
     * The tag that belong to the article.
     */
    public function article() {
        return $this->belongsToMany(Article::class);
    }
}
