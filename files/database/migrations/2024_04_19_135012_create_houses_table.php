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
            $table->text('description');
            $table->text('content');
            $table->string('preview_image');

            $table->integer('main_price');
            $table->integer('add_price');
            $table->boolean('is_published')->default(0);

            $table->foreignId('category_id')->nullable()->index()->constrained('categories');
            $table->string('add_services_ids');
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
