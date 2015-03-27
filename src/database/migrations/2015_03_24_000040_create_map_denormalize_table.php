<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateMapDenormalizeTable
 *
 * Generated by ViKon\DbExporter
 */
class CreateMapDenormalizeTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('map_denormalize', function (Blueprint $table) {
            $table->integer('item_id');
            $table->integer('type_id')
                ->nullable()
                ->default(null);
            $table->integer('group_id')
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
            $table->integer('ortinyint_id')
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
            $table->float('radius')
                ->nullable()
                ->default(null);
            $table->string('item_name', 100)
                ->nullable()
                ->default(null);
            $table->float('security')
                ->nullable()
                ->default(null);
            $table->integer('celestial_index')
                ->nullable()
                ->default(null);
            $table->integer('ortinyint_index')
                ->nullable()
                ->default(null);


            $table->primary('item_id', 'prim');
            $table->index(['group_id', 'region_id'], 'map_denormalize__i_x_group_region');
            $table->index(['group_id', 'constellation_id'], 'map_denormalize__i_x_group_constellation');
            $table->index(['group_id', 'solar_system_id'], 'map_denormalize__i_x_group_system');
            $table->index('solar_system_id', 'map_denormalize__i_x_system');
            $table->index('constellation_id', 'map_denormalize__i_x_constellation');
            $table->index('region_id', 'map_denormalize__i_x_region');
            $table->index('ortinyint_id', 'map_denormalize__i_x_ortinyint');
            $table->index('type_id', 'type_id');


            $table->foreign('type_id', 'map_denormalize_ibfk_1')
                ->references('type_id')
                ->on('inv_types');

            $table->foreign('group_id', 'map_denormalize_ibfk_2')
                ->references('group_id')
                ->on('inv_groups');

            $table->foreign('solar_system_id', 'map_denormalize_ibfk_3')
                ->references('solar_system_id')
                ->on('map_solar_systems');

            $table->foreign('constellation_id', 'map_denormalize_ibfk_4')
                ->references('constellation_id')
                ->on('map_constellations');

            $table->foreign('region_id', 'map_denormalize_ibfk_5')
                ->references('region_id')
                ->on('map_regions');

            $table->foreign('ortinyint_id', 'map_denormalize_ibfk_6')
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
        Schema::drop('map_denormalize');
    }
}