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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('servicename')->nullable();
            $table->string('Frequency')->nullable();
            $table->string('Duration')->nullable();
            $table->string('nofProfessionals')->nullable();
            $table->string('Material')->nullable();
            $table->string('DATE_TIME_Professional')->nullable();
            $table->string('DATE_TIME_Date')->nullable();
            $table->string('DATE_TIME_Start_Time')->nullable();
            $table->string('ADDRESS')->nullable();
            $table->string('Price')->nullable();
            $table->string('servicetime')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
