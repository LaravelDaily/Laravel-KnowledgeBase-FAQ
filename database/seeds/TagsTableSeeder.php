<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Cviebrock\EloquentSluggable\Services\SlugService;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach(range(1, 30) as $id)
        {
            $word = $faker->word;
            Tag::create(['name' => $word, 'slug' => SlugService::createSlug(Tag::class, 'slug', $word)]);
        }
    }
}
