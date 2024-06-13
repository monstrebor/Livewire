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
        Schema::create('id_validations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Reg_ID');
            $table->string('Identification');
            $table->unsignedBigInteger('Identification_Number');
            $table->string('Identification_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('id_validations');
    }
};
