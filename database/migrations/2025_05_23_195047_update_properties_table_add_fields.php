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
        //
    Schema::table('properties', function (Blueprint $table) {
        if (!Schema::hasColumn('properties', 'title')) {
            $table->string('title')->nullable();
        }
        if (!Schema::hasColumn('properties', 'type')) {
            $table->string('type')->nullable();
        }
        if (!Schema::hasColumn('properties', 'status')) {
            $table->string('status')->nullable();
        }
        if (!Schema::hasColumn('properties', 'price')) {
            $table->string('price')->nullable();
        }
        if (!Schema::hasColumn('properties', 'address')) {
            $table->string('address')->nullable();
        }
        if (!Schema::hasColumn('properties', 'area')) {
            $table->integer('area')->nullable();
        }
        if (!Schema::hasColumn('properties', 'beds')) {
            $table->integer('beds')->nullable();
        }
        if (!Schema::hasColumn('properties', 'baths')) {
            $table->integer('baths')->nullable();
        }
        if (!Schema::hasColumn('properties', 'image')) {
            $table->string('image')->nullable();
        }
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
