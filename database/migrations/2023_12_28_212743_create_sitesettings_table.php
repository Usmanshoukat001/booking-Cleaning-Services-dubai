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
        Schema::create('sitesettings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('Title')->nullable();
            $table->string('Description')->nullable();
            $table->string('Canonical')->nullable();
            $table->string('FaceBook')->nullable();
            $table->string('Twiter')->nullable();
            $table->string('Instagram')->nullable();
            $table->string('Youtube')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sitesettings');
    }
};
