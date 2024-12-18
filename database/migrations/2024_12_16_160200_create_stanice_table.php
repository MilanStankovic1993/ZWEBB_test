<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaniceTable extends Migration
{
    public function up()
    {
        Schema::create('stanice', function (Blueprint $table) {
            $table->id();
            $table->string('naziv')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stanice');
    }
}
