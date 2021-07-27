<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tags;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];

    public function tags()
    {
        return $this->hasMany(Tags::class);
    }
}
