<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinijeTable extends Migration
{
    public function up()
    {
        Schema::create('linije', function (Blueprint $table) {
            $table->id();
            $table->boolean('smer_putovanja')->default(false);
            $table->string('naziv_linije');
            $table->unsignedBigInteger('od_stanice_id');
            $table->unsignedBigInteger('do_stanice_id');
            $table->time('vreme_polaska');
            $table->time('vreme_dolaska');
            $table->timestamps();

            // Postavljanje stranih ključeva
            $table->foreign('od_stanice_id')->references('id')->on('stanice')->onDelete('cascade');
            $table->foreign('do_stanice_id')->references('id')->on('stanice')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('linije');
    }
}
