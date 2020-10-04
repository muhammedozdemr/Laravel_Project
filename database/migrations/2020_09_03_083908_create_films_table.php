<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('category_name');
            $table->string('detail');
            $table->string('imdb');
            $table->string('director');
            $table->string('artist');
            $table->string('time');
            $table->string('tags');
            $table->string('image');
            $table->string('video');
            $table->timestamps();
            $table->softDeletes(); //mutlaka eklenmeli
        });
    }

 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
