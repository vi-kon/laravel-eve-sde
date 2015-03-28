<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateInvTypesTable
 *
 * Generated by ViKon\DbExporter
 */
class CreateInvTypesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('inv_types', function (Blueprint $table) {
            $table->integer('type_id');
            $table->integer('group_id')
                ->nullable()
                ->default(null);
            $table->string('type_name', 100)
                ->nullable()
                ->default(null);
            $table->string('description', 3000)
                ->nullable()
                ->default(null);
            $table->float('mass')
                ->nullable()
                ->default(null);
            $table->float('volume')
                ->nullable()
                ->default(null);
            $table->float('capacity')
                ->nullable()
                ->default(null);
            $table->integer('portion_size')
                ->nullable()
                ->default(null);
            $table->smallInteger('race_id')
                ->nullable()
                ->default(null);
            $table->integer('base_price')
                ->nullable()
                ->default(null);
            $table->boolean('published')
                ->nullable()
                ->default(null);
            $table->integer('market_group_id')
                ->nullable()
                ->default(null);
            $table->float('chance_of_duplicating')
                ->nullable()
                ->default(null);


            $table->primary('type_id', 'prim');
            $table->index('group_id', 'inv_types__i_x__group');
            $table->index('race_id', 'race_id');
            $table->index('market_group_id', 'market_group_id');


            $table->foreign('group_id', 'inv_types_ibfk_1')
                ->references('group_id')
                ->on('inv_groups');

            $table->foreign('race_id', 'inv_types_ibfk_2')
                ->references('race_id')
                ->on('chr_races');

            $table->foreign('market_group_id', 'inv_types_ibfk_3')
                ->references('market_group_id')
                ->on('inv_market_groups');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('inv_types');
    }
}