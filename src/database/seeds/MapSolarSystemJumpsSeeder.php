<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Map\SolarSystemJumps;
use ViKon\Utilities\ConsoleProgress;

class MapSolarSystemJumpsSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'from_region_id',
        1 => 'from_constellation_id',
        2 => 'from_solar_system_id',
        3 => 'to_solar_system_id',
        4 => 'to_constellation_id',
        5 => 'to_region_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('map_solar_system_jumps')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed map_solar_system_jumps table');
        $this->setProgressMax(13826);

        $data = include(__DIR__ . '/data/map_solar_system_jumps_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        SolarSystemJumps::create($data);
        $this->progress();
    }

}
