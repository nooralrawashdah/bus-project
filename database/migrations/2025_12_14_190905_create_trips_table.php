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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
           $table->time('Start_time');
            $table->time('End_time');

             $table->foreignId('bus_id')
              ->constrained('_bus')
              ->onDelete('cascade');

               $table->foreignId('routes_id')
              ->constrained('_routes')
              ->onDelete('cascade');
              $table->unique(['bus_id', 'route_id', 'Start_time']);
              $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
