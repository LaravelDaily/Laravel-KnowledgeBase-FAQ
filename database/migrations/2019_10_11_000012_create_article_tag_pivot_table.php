<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTagPivotTable extends Migration
{
    public function up()
    {
        Schema::create('article_tag', function (Blueprint $table) {
            $table->unsignedInteger('article_id');

            $table->foreign('article_id', 'article_id_fk_455948')->references('id')->on('articles')->onDelete('cascade');

            $table->unsignedInteger('tag_id');

            $table->foreign('tag_id', 'tag_id_fk_455948')->references('id')->on('tags')->onDelete('cascade');
        });
    }
}
