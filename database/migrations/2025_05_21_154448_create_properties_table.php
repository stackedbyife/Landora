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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('location')->nullable();
            $table->text('description')->nullable();
            $table->string('price', 12, 2);
            $table->enum('status', ['Available', 'Sold', 'Rented'])->default('available');
            $table->enum('type', ['Apartment', 'Duplex', 'Land', 'Villa', 'Home', 'Office', 'Building', 'Townhouse', 'Shop', 'Garage'])->default('Apartment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
