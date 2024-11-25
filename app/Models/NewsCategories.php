<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategories extends Model
{
    use HasFactory;
    
    protected $fillable = ['id', 'category_name'];

    // Definindo a relação com a model News
    public function news()
    {
        return $this->hasMany(News::class, 'category_id');
    }
}
