<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateRamAssemblyLineStationsTable
 *
 * Generated by ViKon\DbExporter
 */
class CreateRamAssemblyLineStationsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('ram_assembly_line_stations', function (Blueprint $table) {
            $table->integer('station_id');
            $table->tinyInteger('assembly_line_type_id')
                ->unsigned();
            $table->tinyInteger('quantity')
                ->unsigned()
                ->nullable()
                ->default(null);
            $table->integer('station_type_id')
                ->nullable()
                ->default(null);
            $table->integer('owner_id')
                ->nullable()
                ->default(null);
            $table->integer('solar_system_id')
                ->nullable()
                ->default(null);
            $table->integer('region_id')
                ->nullable()
                ->default(null);


            $table->primary(['station_id', 'assembly_line_type_id'], 'prim');
            $table->index('region_id', 'ram_assembly_line_stations__i_x_region');
            $table->index('owner_id', 'ram_assembly_line_stations__i_x_owner');
            $table->index('station_type_id', 'station_type_id');
            $table->index('solar_system_id', 'solar_system_id');
            $table->index('assembly_line_type_id', 'assembly_line_type_id');


            $table->foreign('region_id', 'ram_assembly_line_stations_ibfk_1')
                ->references('region_id')
                ->on('map_regions');

            $table->foreign('assembly_line_type_id', 'ram_assembly_line_stations_ibfk_2')
                ->references('assembly_line_type_id')
                ->on('ram_assembly_line_types');

            $table->foreign('station_type_id', 'ram_assembly_line_stations_ibfk_3')
                ->references('station_type_id')
                ->on('sta_station_types');

            $table->foreign('owner_id', 'ram_assembly_line_stations_ibfk_4')
                ->references('corporation_id')
                ->on('crp_n_p_c_corporations');

            $table->foreign('solar_system_id', 'ram_assembly_line_stations_ibfk_5')
                ->references('solar_system_id')
                ->on('map_solar_systems');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('ram_assembly_line_stations');
    }
}