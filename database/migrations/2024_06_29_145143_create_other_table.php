<?php

use App\Constants\StatusConstant;
use App\Constants\TypeConstant;
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
        Schema::create('others', function (Blueprint $table) {
            $table->string('id', 36)->primary();
            $table->string('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->string('name');
            $table->float('amount');
            $table->enum('type', TypeConstant::toArray())->default(TypeConstant::LEMBURAN);
            $table->dateTime('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('other');
    }
};
