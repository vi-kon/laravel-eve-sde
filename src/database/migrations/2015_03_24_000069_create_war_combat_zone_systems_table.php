<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateWarCombatZoneSystemsTable
 *
 * Generated by ViKon\DbExporter
 */
class CreateWarCombatZoneSystemsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('war_combat_zone_systems', function (Blueprint $table) {
            $table->integer('solar_system_id');
            $table->integer('combat_zone_id')
                ->nullable()
                ->default(null);


            $table->primary('solar_system_id', 'prim');
            $table->index('combat_zone_id', 'combat_zone_id');


            $table->foreign('solar_system_id', 'war_combat_zone_systems_ibfk_1')
                ->references('solar_system_id')
                ->on('map_solar_systems');

            $table->foreign('combat_zone_id', 'war_combat_zone_systems_ibfk_2')
                ->references('combat_zone_id')
                ->on('war_combat_zones');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('war_combat_zone_systems');
    }
}