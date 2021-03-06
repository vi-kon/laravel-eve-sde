<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateDgmTypeAttributesTable
 *
 * Generated by ViKon\DbExporter
 */
class CreateDgmTypeAttributesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('dgm_type_attributes', function (Blueprint $table) {
            $table->integer('type_id');
            $table->smallInteger('attribute_id');
            $table->integer('value_int')
                ->nullable()
                ->default(null);
            $table->float('value_float')
                ->nullable()
                ->default(null);


            $table->primary(['type_id', 'attribute_id'], 'prim');


            $table->foreign('type_id', 'dgm_type_attributes_ibfk_1')
                ->references('type_id')
                ->on('inv_types');

            $table->foreign('attribute_id', 'dgm_type_attributes_ibfk_2')
                ->references('attribute_id')
                ->on('dgm_attribute_types');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('dgm_type_attributes');
    }
}