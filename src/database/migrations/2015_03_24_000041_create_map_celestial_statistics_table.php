<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateMapCelestialStatisticsTable
 *
 * Generated by ViKon\DbExporter
 */
class CreateMapCelestialStatisticsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('map_celestial_statistics', function (Blueprint $table) {
            $table->integer('celestial_id');
            $table->float('temperature')
                ->nullable()
                ->default(null);
            $table->string('spectral_class', 10)
                ->nullable()
                ->default(null);
            $table->float('luminosity')
                ->nullable()
                ->default(null);
            $table->float('age')
                ->nullable()
                ->default(null);
            $table->float('life')
                ->nullable()
                ->default(null);
            $table->float('orbit_radius')
                ->nullable()
                ->default(null);
            $table->float('eccentricity')
                ->nullable()
                ->default(null);
            $table->float('mass_dust')
                ->nullable()
                ->default(null);
            $table->float('mass_gas')
                ->nullable()
                ->default(null);
            $table->integer('fragmented')
                ->nullable()
                ->default(null);
            $table->float('density')
                ->nullable()
                ->default(null);
            $table->float('surface_gravity')
                ->nullable()
                ->default(null);
            $table->float('escape_velocity')
                ->nullable()
                ->default(null);
            $table->float('orbit_period')
                ->nullable()
                ->default(null);
            $table->float('rotation_rate')
                ->nullable()
                ->default(null);
            $table->integer('locked')
                ->nullable()
                ->default(null);
            $table->integer('pressure')
                ->nullable()
                ->default(null);
            $table->integer('radius')
                ->nullable()
                ->default(null);
            $table->integer('mass')
                ->nullable()
                ->default(null);


            $table->primary('celestial_id', 'prim');


            $table->foreign('celestial_id', 'map_celestial_statistics_ibfk_1')
                ->references('item_id')
                ->on('map_denormalize');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('map_celestial_statistics');
    }
}