<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateDgmExpressionsTable
 *
 * Generated by ViKon\DbExporter
 */
class CreateDgmExpressionsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('dgm_expressions', function (Blueprint $table) {
            $table->integer('expression_id');
            $table->integer('operand_id')
                ->nullable()
                ->default(null);
            $table->integer('arg1')
                ->nullable()
                ->default(null);
            $table->integer('arg2')
                ->nullable()
                ->default(null);
            $table->string('expression_value', 100)
                ->nullable()
                ->default(null);
            $table->string('description', 1000)
                ->nullable()
                ->default(null);
            $table->string('expression_name', 500)
                ->nullable()
                ->default(null);
            $table->integer('expression_type_id')
                ->nullable()
                ->default(null);
            $table->smallInteger('expression_group_id')
                ->nullable()
                ->default(null);
            $table->smallInteger('expression_attribute_id')
                ->nullable()
                ->default(null);


            $table->primary('expression_id', 'prim');
            $table->index('expression_attribute_id', 'expression_attribute_id');
            $table->index('expression_group_id', 'expression_group_id');
            $table->index('expression_type_id', 'expression_type_id');
            $table->index('operand_id', 'operand_id');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('dgm_expressions');
    }
}