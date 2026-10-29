<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address', 45); // Suporta IPv4 e IPv6
            $table->timestamps(); // Cria created_at e updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};