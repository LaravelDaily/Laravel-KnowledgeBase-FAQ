<?php

use Illuminate\Database\Seeder;

use App\Article;
use App\Category;
use App\Tag;

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

        foreach(range(1,10) as $id)
        {
            $article = new Article;
            $article->title = $faker->sentence;
            $article->short_text = $faker->paragraph;
            $article->full_text = $faker->paragraph(9);
            $article->views_count = rand(0, 1000);
            $article->save();

            $article->tags()->sync($tags->random(rand(1, $tags->count())));
            $article->categories()->sync($categories->random(rand(1, $categories->count())));
        }
    }
}
