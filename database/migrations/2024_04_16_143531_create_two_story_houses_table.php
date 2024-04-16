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
        Schema::create('two_story_houses', function (Blueprint $table) {

            $table->id();

//----------Поля с основной информацией о проекте----------------
            $table->string('title');
            $table->string('project_name');
            $table->string('size');
            $table->string('floors_number');
            $table->string('main_cost');
            $table->string('add_cost');
            $table->string('add_services');

//----------Поля с фотографиями проекта--------------------------
            $table->string('main_facade_img');
            $table->string('rear_facade_img');
            $table->string('first_floor_img');
            $table->string('second_floor_img');


//----------Поля с дополнительной информацией (2 этаж)------------
            $table->text('decoration_of_the_attic_and_partitions')->nullable();
            $table->text('floors')->nullable();
            $table->text('ceilings')->nullable();
            $table->text('insulation_of_external_walls')->nullable();
            $table->text('insulation _of_partitions')->nullable();
            $table->text('roof')->nullable();
            $table->text('rafter_structure')->nullable();
            $table->text('lathing')->nullable();
            $table->text('ventilation_shafts')->nullable();
            $table->text('roof_insulation')->nullable();
            $table->text('windows')->nullable();
            $table->text('doors')->nullable();
            $table->text('ladder')->nullable();



//----------Поля с дополнительной информацией (1 этаж)------------
            $table->text('wind_insulation_of_the_walls')->nullable();
            $table->text('external_wall_frame')->nullable();
            $table->text('exterior_finish')->nullable();
            $table->text('interior_decoration_of_walls_the_first_floor')->nullable();
            $table->text('insulation_of_external_walls_the_first_floor')->nullable();
            $table->text('partitions')->nullable();
            $table->text('ceilings_the_first_floor')->nullable();
            $table->text('inter_floor_covering')->nullable();
            $table->text('floor_insulation')->nullable();
            $table->text('insulation_of_inter_floor_ceilings')->nullable();


//----------Поля с дополнительной информацией (фундамент)------------
            $table->text('pile_material')->nullable();
            $table->text('pile_size')->nullable();
            $table->text('waterproofing')->nullable();
            $table->text('harness')->nullable();
            $table->text('lags')->nullable();
            $table->text('foundation_floor')->nullable();
            $table->text('communications')->nullable();


//----------Служебная информация--------------------------------------
            $table->boolean('is_published')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('two_story_houses');
    }
};
