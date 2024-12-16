<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('linije', function (Blueprint $table) {
            $table->id();
            $table->foreignId('od_stanica_id')->constrained('stanice')->onDelete('cascade');
            $table->foreignId('do_stanica_id')->constrained('stanice')->onDelete('cascade');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('linije');
    }
};
