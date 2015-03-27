<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Translation\TranslationColumns;
use ViKon\Utilities\ConsoleProgress;

class TrnTranslationColumnsSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'tc_group_id',
        1 => 'tc_id',
        2 => 'table_name',
        3 => 'column_name',
        4 => 'master_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('trn_translation_columns')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed trn_translation_columns table');
        $this->setProgressMax(32);

        $data = include(__DIR__ . '/data/trn_translation_columns_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        TranslationColumns::create($data);
        $this->progress();
    }

}
