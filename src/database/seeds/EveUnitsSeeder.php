<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\EveUnit;
use ViKon\Utilities\ConsoleProgressbar;

class EveUnitsSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'unit_id',
        1 => 'unit_name',
        2 => 'display_name',
        3 => 'description',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('eve_units')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> eve_units');
        $this->setProgressMax(57);

        $data = include(__DIR__ . '/data/eve_units_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        EveUnit::create($data);
        $this->progress();
    }

}
