<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreatePlanetSchematicsTable
 *
 * Generated by ViKon\DbExporter
 */
class CreatePlanetSchematicsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('planet_schematics', function (Blueprint $table) {
            $table->smallInteger('schematic_id');
            $table->string('schematic_name', 255)
                ->nullable()
                ->default(null);
            $table->integer('cycle_time')
                ->nullable()
                ->default(null);


            $table->primary('schematic_id', 'prim');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('planet_schematics');
    }
}