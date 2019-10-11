<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleCategoryPivotTable extends Migration
{
    public function up()
    {
        Schema::create('article_category', function (Blueprint $table) {
            $table->unsignedInteger('article_id');

            $table->foreign('article_id', 'article_id_fk_455947')->references('id')->on('articles')->onDelete('cascade');

            $table->unsignedInteger('category_id');

            $table->foreign('category_id', 'category_id_fk_455947')->references('id')->on('categories')->onDelete('cascade');
        });
    }
}
