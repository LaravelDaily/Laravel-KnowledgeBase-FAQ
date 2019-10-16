<?php

use Illuminate\Database\Seeder;

use App\Article;
use App\Category;
use App\Tag;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $categories = Category::pluck('id');
        $tags = Tag::pluck('id');

        foreach(range(1,25) as $id)
        {
            $article = new Article;
            $article->title = $faker->sentence;
            $article->slug = SlugService::createSlug(Article::class, 'slug', $article->title);
            $article->short_text = $faker->paragraph;
            $article->full_text = $faker->paragraph(9);
            $article->views_count = rand(0, 1000);
            $article->category_id = $categories->random();
            $article->save();

            $article->tags()->sync($tags->random(rand(1, $tags->count())));
        }
    }
}
