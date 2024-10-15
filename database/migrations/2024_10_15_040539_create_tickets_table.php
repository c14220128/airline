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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->foreignId('flight_id')->constrained('flights')->onDelete('cascade');
            $table->string('passenger_name')->nullable(false);
            $table->string('passenger_phone', 14)->nullable(false);
            $table->string('seat_number', 3)->nullable(false);
            $table->boolean('is_boarding')->default(false);
            $table->dateTime('boarding_time')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
