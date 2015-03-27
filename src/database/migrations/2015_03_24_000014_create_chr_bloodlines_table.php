<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateChrBloodlinesTable
 *
 * Generated by ViKon\DbExporter
 */
class CreateChrBloodlinesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('chr_bloodlines', function (Blueprint $table) {
            $table->tinyInteger('bloodline_id')
                ->unsigned();
            $table->string('bloodline_name', 100)
                ->nullable()
                ->default(null);
            $table->tinyInteger('race_id')
                ->unsigned()
                ->nullable()
                ->default(null);
            $table->string('description', 1000)
                ->nullable()
                ->default(null);
            $table->string('male_description', 1000)
                ->nullable()
                ->default(null);
            $table->string('female_description', 1000)
                ->nullable()
                ->default(null);
            $table->integer('ship_type_id')
                ->nullable()
                ->default(null);
            $table->integer('corporation_id')
                ->nullable()
                ->default(null);
            $table->tinyInteger('perception')
                ->unsigned()
                ->nullable()
                ->default(null);
            $table->tinyInteger('willpower')
                ->unsigned()
                ->nullable()
                ->default(null);
            $table->tinyInteger('charisma')
                ->unsigned()
                ->nullable()
                ->default(null);
            $table->tinyInteger('memory')
                ->unsigned()
                ->nullable()
                ->default(null);
            $table->tinyInteger('intelligence')
                ->unsigned()
                ->nullable()
                ->default(null);
            $table->integer('icon_id')
                ->nullable()
                ->default(null);
            $table->string('short_description', 500)
                ->nullable()
                ->default(null);
            $table->string('short_male_description', 500)
                ->nullable()
                ->default(null);
            $table->string('short_female_description', 500)
                ->nullable()
                ->default(null);


            $table->primary('bloodline_id', 'prim');
            $table->index('race_id', 'race_id');
            $table->index('ship_type_id', 'ship_type_id');
            $table->index('corporation_id', 'corporation_id');
            $table->index('icon_id', 'icon_id');


            $table->foreign('ship_type_id', 'chr_bloodlines_ibfk_1')
                ->references('type_id')
                ->on('inv_types');

            $table->foreign('corporation_id', 'chr_bloodlines_ibfk_2')
                ->references('corporation_id')
                ->on('crp_n_p_c_corporations');

            $table->foreign('race_id', 'chr_bloodlines_ibfk_3')
                ->references('race_id')
                ->on('chr_races');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('chr_bloodlines');
    }
}