<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('disabilities', function (Blueprint $table) {
            $table->id();
            $table->string('pt', 100);
            $table->string('en', 100);
            $table->string('es', 100);
            $table->string('status', 2)->default('AT');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('disabilities');
    }
};