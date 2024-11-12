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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->decimal('Jan', total: 7, places: 2);
            $table->decimal('Fev', total: 7, places: 2);
            $table->decimal('Mar', total: 7, places: 2);
            $table->decimal('Abr', total: 7, places: 2);
            $table->decimal('Mai', total: 7, places: 2);
            $table->decimal('Jun', total: 7, places: 2);
            $table->decimal('Jul', total: 7, places: 2);
            $table->decimal('Ago', total: 7, places: 2);
            $table->decimal('Set', total: 7, places: 2);
            $table->decimal('Out', total: 7, places: 2);
            $table->decimal('Nov', total: 7, places: 2);
            $table->decimal('Dez', total: 7, places: 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
