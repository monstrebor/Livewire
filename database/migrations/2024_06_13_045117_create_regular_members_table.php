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
        Schema::create('regular_members', function (Blueprint $table) {
            $table->id();
            $table->string("firstName");
            $table->string("middleName");
            $table->string("lastName");
            $table->string("religion");
            $table->string("POB");
            $table->date("DOB");
            $table->string('facebookAccount');
            $table->string('email');
            $table->BigInteger('contactNumber');
            $table->string('gender');
            $table->string('occupation');
            $table->string('employmentStatus');
            $table->string('educationalAttaiment');
            $table->string('houseOwnership');
            $table->string('citizenship');
            $table->string('civilStatus');
            $table->string('lengthOfStay');
            $table->unsignedBigInteger('monthlyIncome');
            $table->unsignedBigInteger('annualIncome');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regular_members');
    }
};
