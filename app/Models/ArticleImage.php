<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleImage extends Model
{
    use HasFactory;
    protected $table = 'article_image';
    protected $fillable = ['image', 'y_offset', 'x_offset', 'size'];

    public function article()
    {
        return $this->belongsTo(ArticleTable::class);
    }
}
