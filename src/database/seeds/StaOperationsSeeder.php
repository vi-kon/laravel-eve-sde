<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Station\Operation;
use ViKon\Utilities\ConsoleProgressbar;

class StaOperationsSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0  => 'activity_id',
        1  => 'operation_id',
        2  => 'operation_name',
        3  => 'description',
        4  => 'fringe',
        5  => 'corridor',
        6  => 'hub',
        7  => 'border',
        8  => 'ratio',
        9  => 'caldari_station_type_id',
        10 => 'minmatar_station_type_id',
        11 => 'amarr_station_type_id',
        12 => 'gallente_station_type_id',
        13 => 'jove_station_type_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('sta_operations')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> sta_operations');
        $this->setProgressMax(55);

        $data = include(__DIR__ . '/data/sta_operations_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Operation::create($data);
        $this->progress();
    }

}
