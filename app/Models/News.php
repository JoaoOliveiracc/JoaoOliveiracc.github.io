<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    // Adiciona todos os campos que podem ser preenchidos pelo formulário
    protected $fillable = [
        'title',  
        'content',
        'author',
        'published_at',
        'category_id',
        'cover_image',
    ];

    /**
     * Relacionamento com a categoria de notícia (NewsCategory).
     */
    public function category()
    {
        return $this->belongsTo(NewsCategories::class, 'category_id');
    }
}
