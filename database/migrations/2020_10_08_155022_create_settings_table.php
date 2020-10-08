<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_adi');
            $table->string('site_basligi');
            $table->string('site_aciklama');
            $table->string('anahtar_kelimeler');
            $table->string('site_yazar');
            $table->string('footer_yazi');
            $table->string('image');
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
        Schema::dropIfExists('settings');
    }
}
