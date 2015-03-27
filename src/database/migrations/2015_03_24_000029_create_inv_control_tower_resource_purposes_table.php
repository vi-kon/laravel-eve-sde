<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateInvControlTowerResourcePurposesTable
 *
 * Generated by ViKon\DbExporter
 */
class CreateInvControlTowerResourcePurposesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('inv_control_tower_resource_purposes', function (Blueprint $table) {
            $table->tinyInteger('purpose')
                ->unsigned();
            $table->string('purpose_text', 100)
                ->nullable()
                ->default(null);


            $table->primary('purpose', 'prim');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('inv_control_tower_resource_purposes');
    }
}