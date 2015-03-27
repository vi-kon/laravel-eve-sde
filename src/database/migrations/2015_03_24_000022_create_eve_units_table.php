<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateEveUnitsTable
 *
 * Generated by ViKon\DbExporter
 */
class CreateEveUnitsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('eve_units', function (Blueprint $table) {
            $table->tinyInteger('unit_id')
                ->unsigned();
            $table->string('unit_name', 100)
                ->nullable()
                ->default(null);
            $table->string('display_name', 50)
                ->nullable()
                ->default(null);
            $table->string('description', 1000)
                ->nullable()
                ->default(null);


            $table->primary('unit_id', 'prim');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('eve_units');
    }
}