<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateCrpNPCCorporationResearchFieldsTable
 *
 * Generated by ViKon\DbExporter
 */
class CreateCrpNPCCorporationResearchFieldsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('crp_n_p_c_corporation_research_fields', function (Blueprint $table) {
            $table->integer('skill_id');
            $table->integer('corporation_id');


            $table->primary(['skill_id', 'corporation_id'], 'prim');
            $table->index('corporation_id', 'corporation_id');


            $table->foreign('skill_id', 'crp_n_p_c_corporation_research_fields_ibfk_1')
                ->references('type_id')
                ->on('inv_types');

            $table->foreign('corporation_id', 'crp_n_p_c_corporation_research_fields_ibfk_2')
                ->references('corporation_id')
                ->on('crp_n_p_c_corporations');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('crp_n_p_c_corporation_research_fields');
    }
}