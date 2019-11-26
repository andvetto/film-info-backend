<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->on('users')
                ->default(1)
                ->references('id')
                ->onDelete('cascade');
            
            $table->string('title');
            $table->string('year');
            $table->string('plot');
            $table->string('genre');
            $table->string('actors');
            $table->string('director');
            $table->string('runtime');
            $table->string('img');
            $table->string('imdbID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorites');
    }
}
