<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateChrAncestriesTable
 *
 * Generated by ViKon\DbExporter
 */
class CreateChrAncestriesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('chr_ancestries', function (Blueprint $table) {
            $table->tinyInteger('ancestry_id')
                ->unsigned();
            $table->string('ancestry_name', 100)
                ->nullable()
                ->default(null);
            $table->tinyInteger('bloodline_id')
                ->unsigned()
                ->nullable()
                ->default(null);
            $table->string('description', 1000)
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


            $table->primary('ancestry_id', 'prim');
            $table->index('bloodline_id', 'bloodline_id');


            $table->foreign('bloodline_id', 'chr_ancestries_ibfk_1')
                ->references('bloodline_id')
                ->on('chr_bloodlines');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('chr_ancestries');
    }
}