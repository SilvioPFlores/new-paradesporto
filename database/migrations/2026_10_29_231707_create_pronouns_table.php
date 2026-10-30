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
        Schema::create('pronouns', function (Blueprint $table) {
            $table->id();
            $table->string('pt', 50)->nullable();
            $table->string('en', 50)->nullable();
            $table->string('es', 50)->nullable();
            $table->string('status', 2)->default('AT');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pronouns');
    }
};
