<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\TranslationTable;
use ViKon\Utilities\ConsoleProgressbar;

class TranslationTablesSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'source_table',
        1 => 'destination_table',
        2 => 'translated_key',
        3 => 'tc_group_id',
        4 => 'tc_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('translation_tables')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> translation_tables');
        $this->setProgressMax(32);

        $data = include(__DIR__ . '/data/translation_tables_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        TranslationTable::create($data);
        $this->progress();
    }

}
