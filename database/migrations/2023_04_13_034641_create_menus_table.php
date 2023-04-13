<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('menu_name');
            $table->string('description');
            $table->date('published_at');
            $table->integer('total_of_likes');
            $table->string('ingredients');
            $table->string('cooking_steps');
            $table->integer('calories');
            $table->integer('carbohydrates');
            $table->integer('protein');
            $table->integer('fat');
            $table->string('menu_pics');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
};
