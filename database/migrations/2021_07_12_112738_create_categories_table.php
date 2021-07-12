<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->smallInteger('parent_id', unsigned: true)
                ->index();

            $table->string('title');
            $table->string('slug')
                ->unique();

            $table->string('full_url')
                ->unique();

            $table->json('breadcrumbs');
            $table->string('icon')
                ->nullable();

            $table->tinyInteger('sort', unsigned: true)
                ->default(30)
                ->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
