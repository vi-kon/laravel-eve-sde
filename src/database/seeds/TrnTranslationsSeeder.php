<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Translation\Translations;
use ViKon\Utilities\ConsoleProgress;

class TrnTranslationsSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'tc_id',
        1 => 'key_id',
        2 => 'language_id',
        3 => 'text',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('trn_translations')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed trn_translations table');
        $this->setProgressMax(292350);

        $data = include(__DIR__ . '/data/trn_translations_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Translations::create($data);
        $this->progress();
    }

}
