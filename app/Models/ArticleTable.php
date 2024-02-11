<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articletable extends Model
{
    use HasFactory;
    protected $table = 'article';
    protected $fillable = ['title','author','image','content','date'];

    public function scopeSearch($query, $term)
    {
        $query->where('title', 'LIKE', "%{$term}%");
    }

}
