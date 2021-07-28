<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tags;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $posts = Post::factory(60)->create();
      $tags = Tags::factory(20)->create();
      $posts->each(function ($post) use($tags)
      {
        $post->tags()->attach(
          $tags->random(rand(1,3))
              ->pluck('id')
              ->toArray()
        );
        // $tag->posts->asscoiate($posts->random(4));
      });
    
    }
}
