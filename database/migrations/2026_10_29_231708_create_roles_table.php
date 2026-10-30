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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('pt');
            $table->string('en');
            $table->string('es');
            $table->string('leader_title')->nullable(); // Antigo ds_lider
            $table->integer('order')->default(0);      // Antigo nm_ordem
            $table->string('status', 2)->default('AT');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
