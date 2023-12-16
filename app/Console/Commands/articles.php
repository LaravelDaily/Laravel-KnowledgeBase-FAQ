<?php

namespace App\Console\Commands;

use App\Article;
use App\Category;
use App\Tag;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Console\Command;

class articles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'articles:add';

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
        $categories = Category::pluck('id');
        $tags = Tag::pluck('id');

        foreach(range(1,25) as $id)
        {
            $article = new Article;
            $article->title = 'Test Article ' .$id;
            $article->slug = SlugService::createSlug(Article::class, 'slug', $article->title);
            $article->short_text = 'any data test article';
            $article->full_text = 'any data test article';
            $article->views_count = rand(0, 1000);
            $article->category_id = 1;
            $article->save();

            //$article->tags()->sync($tags->random(rand(1, $tags->count())));
        }
        return 0;
    }
}
