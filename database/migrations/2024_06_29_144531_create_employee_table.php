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
        Schema::create('employees', function (Blueprint $table) {
            $table->string('id', 36)->primary();
            $table->string('full_name');
            $table->string('department');
            $table->bigInteger('nik')->unique();
            $table->text('address');
            $table->dateTime('dob');
            $table->string('birth_place');
            $table->dateTime('join_date');
            $table->integer('join_age');
            $table->string('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
