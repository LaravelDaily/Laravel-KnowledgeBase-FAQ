<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('faq_questions', function (Blueprint $table) {
            $table->increments('id');

            $table->longText('question')->nullable();

            $table->longText('answer')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
