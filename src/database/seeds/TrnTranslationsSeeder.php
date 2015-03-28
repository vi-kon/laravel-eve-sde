<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Translation\Translation;
use ViKon\Utilities\ConsoleProgressbar;

class TrnTranslationsSeeder extends Seeder {
    use ConsoleProgressbar;

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
        $this->startProgress('<info>Inserting data:</info> trn_translations');
        $this->setProgressMax(293088);

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
        Translation::create($data);
        $this->progress();
    }

}
