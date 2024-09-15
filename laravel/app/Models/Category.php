<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'id',
        'name'
    ];

    /**
     * Get the category associated to article.
     */

    public function article() {
        return $this->hasMany(Article::class, 'category_id', 'id');
    }
}
