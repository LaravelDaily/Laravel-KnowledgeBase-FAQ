<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToFaqQuestionsTable extends Migration
{
    public function up()
    {
        Schema::table('faq_questions', function (Blueprint $table) {
            $table->unsignedInteger('category_id')->nullable();

            $table->foreign('category_id', 'category_fk_455958')->references('id')->on('faq_categories');
        });
    }
}
