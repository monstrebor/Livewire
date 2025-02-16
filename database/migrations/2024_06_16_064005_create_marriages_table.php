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
        Schema::create('marriages', function (Blueprint $table) {
            $table->id();
            $table->string('placeOfMarriage')->nullable();
            $table->date('dateOfMarriage')->nullable();
            $table->unsignedBigInteger('SpouseID')->nullable();
            $table->unsignedBigInteger('Reg_ID');
            $table->foreign('Reg_ID')->references('id')->on('regular_members');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marriages');
    }
};
