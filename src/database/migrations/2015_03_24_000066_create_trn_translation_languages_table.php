<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateTrnTranslationLanguagesTable
 *
 * Generated by ViKon\DbExporter
 */
class CreateTrnTranslationLanguagesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('trn_translation_languages', function (Blueprint $table) {
            $table->integer('numeric_language_id');
            $table->string('language_id', 50)
                ->nullable()
                ->default(null);
            $table->string('language_name', 200)
                ->nullable()
                ->default(null);


            $table->primary('numeric_language_id', 'prim');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('trn_translation_languages');
    }
}