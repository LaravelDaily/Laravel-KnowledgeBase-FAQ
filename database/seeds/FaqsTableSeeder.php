<?php

use Illuminate\Database\Seeder;

use App\FaqCategory;
use App\FaqQuestion;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $category = FaqCategory::create(['category' => 'Main']);

        foreach(range(1,5) as $id)
        {
            $question = new FaqQuestion;
            $question->question = $faker->sentence;
            $question->answer = $faker->paragraph;
            $category->faqQuestions()->save($question);
        }
    }
}
