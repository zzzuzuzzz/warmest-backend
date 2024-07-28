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

            //          Общая информация об объекте, которая расположена в главной карточке
            $table->string('title');
            $table->integer('params_size');
            $table->integer('params_floors');
            $table->integer('params_length');
            $table->integer('params_width');
            $table->boolean('mezzanine')->default(0);

            $table->integer('main_price');
            $table->integer('add_price');
            $table->integer('credit');

            //          Описание и прочая дополнительная информация
            $table->text('description');

            $table->string('article');
            $table->boolean('finishing')->default(0);
            $table->integer('number_of_bedrooms');
            $table->boolean('electricity')->default(0);
            $table->boolean('water')->default(0);
            $table->boolean('gas')->default(0);


            //          Служебная информация для фильтрации объектов
            $table->boolean('is_published')->default(0);
            $table->foreignId('floor_category_id')->index()->constrained('floor_categories');
            $table->foreignId('material_category_id')->index()->constrained('material_categories');
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
