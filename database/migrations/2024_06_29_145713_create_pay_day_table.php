<?php

use App\Constants\StatusConstant;
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
        Schema::create('pay_days', function (Blueprint $table) {
            $table->string('id', 36)->primary();
            $table->string('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->string('name');
            $table->float('amount');
            $table->dateTime('date');
            $table->enum('status',StatusConstant::toArray())->default(StatusConstant::CREATED);
            $table->float('salary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pay_day');
    }
};
