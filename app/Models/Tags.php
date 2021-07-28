<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Tags extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function posts()
    {
      return $this->belongsToMany(Post::class);
    }

    public function scopeWithName($query, $name)
    {
      return $query->where('name', $name);
    }
}
