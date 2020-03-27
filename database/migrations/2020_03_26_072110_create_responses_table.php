<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responses', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('survey_id');
            $table->unsignedbigInteger('mcq_id');
            $table->unsignedbigInteger('answer_id');
            $table->timestamps();
            $table->foreign('mcq_id')->references('id')->on('mcqs');
            $table->foreign('survey_id')->references('id')->on('surveys');
            $table->foreign('answer_id')->references('id')->on('answers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responses');
    }
}
