<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tags;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'tag_id'];

    public function tags()
    {
      return $this->belongsToMany(Tags::class);
    }

    public function scopeByTag($query, $tagName)
    {
      $query->whereHas('tags', function($query) use($tagName)
      {
        $query->withName($tagName);
      });
    }

}
