<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateMapRegionsTable
 *
 * Generated by ViKon\DbExporter
 */
class CreateMapRegionsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('map_regions', function (Blueprint $table) {
            $table->integer('region_id');
            $table->string('region_name', 100)
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
            $table->float('x_min')
                ->nullable()
                ->default(null);
            $table->float('x_max')
                ->nullable()
                ->default(null);
            $table->float('y_min')
                ->nullable()
                ->default(null);
            $table->float('y_max')
                ->nullable()
                ->default(null);
            $table->float('z_min')
                ->nullable()
                ->default(null);
            $table->float('z_max')
                ->nullable()
                ->default(null);
            $table->integer('faction_id')
                ->nullable()
                ->default(null);
            $table->float('radius')
                ->nullable()
                ->default(null);


            $table->primary('region_id', 'prim');
            $table->index('region_id', 'map_regions__i_x_region');
            $table->index('faction_id', 'faction_id');


            $table->foreign('faction_id', 'map_regions_ibfk_1')
                ->references('faction_id')
                ->on('chr_factions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('map_regions');
    }
}