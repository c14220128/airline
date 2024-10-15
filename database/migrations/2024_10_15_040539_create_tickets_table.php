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
            $table->foreignId('flight_id')->constrained('flights')->onDelete('cascade'); // Required, foreign key to flights table
            $table->string('passenger_name')->nullable(false); // Required, string
            $table->string('passenger_phone', 14)->nullable(false); // Required, string(14)
            $table->string('seat_number', 3)->nullable(false); // Required, string(3)
            $table->boolean('is_boarding')->default(false); // Required, default false
            $table->dateTime('boarding_time')->nullable(); // Nullable datetime
            $table->timestamps(); // Includes created_at and updated_at
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
