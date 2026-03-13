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
        // id, species, variety, origin, roasted_level,proccess,stok
        Schema::create('coffees', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->enum('species', ['Arabika', 'Robusta','Liberika']);
            $table->string('variety');
            $table->string('origin');
            $table->enum('roasted_level', ['Green Bean', 'Light','Medium','Medium to Dark', 'Dark']);
            $table->enum('process', ['Honey','Natural','Wine', 'Wash']);
            $table->integer('stok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coffees');
    }
};
