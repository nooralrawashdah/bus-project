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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignId('trip_id')
              ->constrained('trips')
              ->onDelete('cascade');

             $table->foreignId('user_id')
              ->constrained('users')
              ->onDelete('cascade');
            

               $table->foreignId('_bus_seat_id')
              ->constrained('_bus_seat')
                 ->onDelete('cascade');
                 $table->unique(['trip_id', 'bus_seat_id']);  // انو ما يحجز نفس المقعد مرتين بنفس رحلة
                 $table->unique(['trip_id', 'user_id']);     // انو ما يحجز مقعد ثاني باص ثاني لنفس رحلة
             $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
