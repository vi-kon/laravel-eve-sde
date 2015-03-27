<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Translation\TranslationLanguages;
use ViKon\Utilities\ConsoleProgress;

class TrnTranslationLanguagesSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'numeric_language_id',
        1 => 'language_id',
        2 => 'language_name',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('trn_translation_languages')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed trn_translation_languages table');
        $this->setProgressMax(8);

        $data = include(__DIR__ . '/data/trn_translation_languages_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        TranslationLanguages::create($data);
        $this->progress();
    }

}