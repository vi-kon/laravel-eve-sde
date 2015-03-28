<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Station\Station;
use ViKon\Utilities\ConsoleProgressbar;

class StaStationsSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0  => 'station_id',
        1  => 'security',
        2  => 'docking_cost_per_volume',
        3  => 'max_ship_volume_dockable',
        4  => 'office_rental_cost',
        5  => 'operation_id',
        6  => 'station_type_id',
        7  => 'corporation_id',
        8  => 'solar_system_id',
        9  => 'constellation_id',
        10 => 'region_id',
        11 => 'station_name',
        12 => 'x',
        13 => 'y',
        14 => 'z',
        15 => 'reprocessing_efficiency',
        16 => 'reprocessing_stations_take',
        17 => 'reprocessing_hangar_flag',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('sta_stations')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> sta_stations');
        $this->setProgressMax(5185);

        $data = include(__DIR__ . '/data/sta_stations_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Station::create($data);
        $this->progress();
    }

}
