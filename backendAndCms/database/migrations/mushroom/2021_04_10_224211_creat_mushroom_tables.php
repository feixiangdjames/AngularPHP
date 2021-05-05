<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatMushroomTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->bigIncrements('types_id')->comment('The Primary Key for the table.');
            $table->string('name', 255)->comment('The name of types mushroom, ie spores, etc.');
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['types_id']);
        });

        Schema::create('mushroom', function (Blueprint $table) {
            $table->bigIncrements('mushroom_id')->comment('The Primary Key for the table.');
            $table->string('title', 255)->comment('The title of mushroom product.');
            $table->unsignedFloat('price');
            $table->unsignedInteger('types_id')->comment('from types');
            $table->integer('rate')->comment('rate');
            $table->text('img')->comment('image url');
            $table->text('description')->comment('The full text description of the mushroom product.');
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['mushroom_id']);
            $table->foreign('types_id')->references('types_id')->on('types of mushroom on homepage');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mushroom');
        Schema::dropIfExists('types');
    }
}
