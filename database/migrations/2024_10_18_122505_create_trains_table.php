<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 64);
            $table->string('departure_station', 128);
            $table->string('arrival_station', 128);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->char('train_code', 8);
            $table->tinyInteger('carriage_number')->nullable();
            $table->boolean('in_time');
            $table->boolean('canceled');
            $table->timestamps();

        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
