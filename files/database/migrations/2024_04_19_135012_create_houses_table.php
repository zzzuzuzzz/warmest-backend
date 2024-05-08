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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('params_size');
            $table->string('params_floors');
            $table->string('params_length');
            $table->string('params_width');

            $table->text('description');

            $table->string('main_price');
            $table->string('add_price');
            $table->string('credit_info');

            $table->boolean('is_published')->default(0);
            $table->foreignId('category_id')->nullable()->index()->constrained('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
