<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateInvContrabandTypesTable
 *
 * Generated by ViKon\DbExporter
 */
class CreateInvContrabandTypesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('inv_contraband_types', function (Blueprint $table) {
            $table->integer('faction_id');
            $table->integer('type_id');
            $table->float('standing_loss')
                ->nullable()
                ->default(null);
            $table->float('confiscate_min_sec')
                ->nullable()
                ->default(null);
            $table->float('fine_by_value')
                ->nullable()
                ->default(null);
            $table->float('attack_min_sec')
                ->nullable()
                ->default(null);


            $table->primary(['faction_id', 'type_id'], 'prim');
            $table->index('type_id', 'inv_contraband_types__i_x_type');


            $table->foreign('faction_id', 'inv_contraband_types_ibfk_1')
                ->references('faction_id')
                ->on('chr_factions');

            $table->foreign('type_id', 'inv_contraband_types_ibfk_2')
                ->references('type_id')
                ->on('inv_types');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('inv_contraband_types');
    }
}