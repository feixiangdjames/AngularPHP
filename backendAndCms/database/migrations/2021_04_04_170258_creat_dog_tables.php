<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatDogTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->bigIncrements('category_id')->comment('The Primary Key for the table.');
            $table->string('name', 255)->comment('The name of the category, ie big dog, etc.');
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['category_id']);
        });

        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('pets_id')->comment('The Primary Key for the table.');
            $table->string('title', 255)->comment('The title of the dog, ie big dog, etc.');
            $table->unsignedFloat('price');
            $table->unsignedInteger('category_id')->comment('from category');
            $table->integer('rate')->comment('rate');
            $table->text('img')->comment('image url');
            $table->text('description')->comment('The full text description of the pet.');
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['pets_id']);
            $table->foreign('category_id')->references('category_id')->on('category');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
        Schema::dropIfExists('category');
    }
}
