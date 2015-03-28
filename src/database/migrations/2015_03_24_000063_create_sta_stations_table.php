<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateStaStationsTable
 *
 * Generated by ViKon\DbExporter
 */
class CreateStaStationsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('sta_stations', function (Blueprint $table) {
            $table->integer('station_id');
            $table->smallInteger('security')
                ->nullable()
                ->default(null);
            $table->float('docking_cost_per_volume')
                ->nullable()
                ->default(null);
            $table->float('max_ship_volume_dockable')
                ->nullable()
                ->default(null);
            $table->integer('office_rental_cost')
                ->nullable()
                ->default(null);
            $table->smallInteger('operation_id')
                ->nullable()
                ->default(null);
            $table->integer('station_type_id')
                ->nullable()
                ->default(null);
            $table->integer('corporation_id')
                ->nullable()
                ->default(null);
            $table->integer('solar_system_id')
                ->nullable()
                ->default(null);
            $table->integer('constellation_id')
                ->nullable()
                ->default(null);
            $table->integer('region_id')
                ->nullable()
                ->default(null);
            $table->string('station_name', 100)
                ->nullable()
                ->default(null);
            $table->float('x')
                ->nullable()
                ->default(null);
            $table->float('y')
                ->nullable()
                ->default(null);
            $table->float('z')
                ->nullable()
                ->default(null);
            $table->float('reprocessing_efficiency')
                ->nullable()
                ->default(null);
            $table->float('reprocessing_stations_take')
                ->nullable()
                ->default(null);
            $table->smallInteger('reprocessing_hangar_flag')
                ->nullable()
                ->default(null);


            $table->primary('station_id', 'prim');
            $table->index('region_id', 'sta_stations__i_x_region');
            $table->index('solar_system_id', 'sta_stations__i_x_system');
            $table->index('constellation_id', 'sta_stations__i_x_constellation');
            $table->index('operation_id', 'sta_stations__i_x_operation');
            $table->index('station_type_id', 'sta_stations__i_x_type');
            $table->index('corporation_id', 'sta_stations__i_x_corporation');


            $table->foreign('station_id', 'sta_stations_ibfk_1')
                ->references('item_id')
                ->on('map_denormalize');

            $table->foreign('operation_id', 'sta_stations_ibfk_2')
                ->references('operation_id')
                ->on('sta_operations');

            $table->foreign('station_type_id', 'sta_stations_ibfk_3')
                ->references('station_type_id')
                ->on('sta_station_types');

            $table->foreign('corporation_id', 'sta_stations_ibfk_4')
                ->references('corporation_id')
                ->on('crp_n_p_c_corporations');

            $table->foreign('solar_system_id', 'sta_stations_ibfk_5')
                ->references('solar_system_id')
                ->on('map_solar_systems');

            $table->foreign('constellation_id', 'sta_stations_ibfk_6')
                ->references('constellation_id')
                ->on('map_constellations');

            $table->foreign('region_id', 'sta_stations_ibfk_7')
                ->references('region_id')
                ->on('map_regions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('sta_stations');
    }
}