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
        Schema::create('spouse', function (Blueprint $table) {
            $table->id();
            $table->string('spouseName')->nullable();
            $table->string('placeOfBirth')->nullable();
            $table->date('dateOfBirth')->nullable();
            $table->string('EducationalAttainment')->nullable();
            $table->string('Occupation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spouse');
    }
};
