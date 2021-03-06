<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateInvPositionsTable
 *
 * Generated by ViKon\DbExporter
 */
class CreateInvPositionsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('inv_positions', function (Blueprint $table) {
            $table->bigInteger('item_id');
            $table->float('x')
                ->default('0.00');
            $table->float('y')
                ->default('0.00');
            $table->float('z')
                ->default('0.00');
            $table->float('yaw')
                ->nullable()
                ->default(null);
            $table->float('pitch')
                ->nullable()
                ->default(null);
            $table->float('roll')
                ->nullable()
                ->default(null);


            $table->primary('item_id', 'prim');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('inv_positions');
    }
}