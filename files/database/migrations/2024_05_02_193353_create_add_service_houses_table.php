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
        Schema::create('add_service_houses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('add_service_id')->nullable()->index()->constrained('add_services');
            $table->foreignId('house_id')->nullable()->index()->constrained('houses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_service_houses');
    }
};
