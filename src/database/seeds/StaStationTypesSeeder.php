<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Station\StationTypes;
use ViKon\Utilities\ConsoleProgress;

class StaStationTypesSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0  => 'station_type_id',
        1  => 'dock_entry_x',
        2  => 'dock_entry_y',
        3  => 'dock_entry_z',
        4  => 'dock_orientation_x',
        5  => 'dock_orientation_y',
        6  => 'dock_orientation_z',
        7  => 'operation_id',
        8  => 'office_slots',
        9  => 'reprocessing_efficiency',
        10 => 'conquerable',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('sta_station_types')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed sta_station_types table');
        $this->setProgressMax(69);

        $data = include(__DIR__ . '/data/sta_station_types_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        StationTypes::create($data);
        $this->progress();
    }

}
