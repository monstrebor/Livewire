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
            $table->string('Id_Type_1');
            $table->string('Id_Type_2');
            $table->unsignedBigInteger('Id_Num_1');
            $table->unsignedBigInteger('Id_Num_2');
            $table->string('Id_image_1');
            $table->string('Id_image_2');
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
