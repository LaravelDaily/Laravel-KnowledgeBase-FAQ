<?php

namespace App\Console\Commands;

use App\FaqCategory;
use App\FaqQuestion;
use Illuminate\Console\Command;

class faqs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'faqs:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $categories = ['System usage', 'Integrations', 'Payments'];

        foreach($categories as $category)
        {
            $category = FaqCategory::create(['category' => $category]);
            foreach(range(1,5) as $id)
            {
                $question = new FaqQuestion;
                $question->question = 'Question Number: ' . $id;
                $question->answer = 'Answer: ' . $id;
                $category->faqQuestions()->save($question);
            }
        }
        return 0;
    }
}
