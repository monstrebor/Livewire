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
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->string('gender');
            $table->integer('age');
            $table->string('address');
            $table->string('religion');
            $table->string('POB');
            $table->date('DOB');
            $table->string('idType');
            $table->integer('idNumber');
            $table->string('occupation');
            $table->string('employment_status');
            $table->string('educational_attainment');
            $table->string('contactNumber');
            $table->string('facebook_account');
            $table->string('email');
            $table->string('nameOfEmployer');
            $table->string('addressOfEmployer');
            $table->integer('monthlyIncome');
            $table->integer('annualIncome');
            $table->string('house_ownership');
            $table->string('citizenship');
            $table->integer('no_of_children')->nullable();
            $table->string('civilStatus');
            $table->string('place_of_marriage')->nullable();
            $table->date('date_of_marriage')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('educational_attainmentSpouse')->nullable();
            $table->string('occupationSpouse')->nullable();
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
