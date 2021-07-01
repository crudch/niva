<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rubric_id');
            $table->string('title', 255);
            $table->string('slug', 255)->unique();
            $table->string('img', 255)->nullable();
            $table->string('description', 500)->default('');
            $table->text('body');

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('rubric_id')
                ->references('id')
                ->on('rubrics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
