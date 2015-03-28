<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Map\SolarSystem;
use ViKon\Utilities\ConsoleProgressbar;

class MapSolarSystemsSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0  => 'region_id',
        1  => 'constellation_id',
        2  => 'solar_system_id',
        3  => 'solar_system_name',
        4  => 'x',
        5  => 'y',
        6  => 'z',
        7  => 'x_min',
        8  => 'x_max',
        9  => 'y_min',
        10 => 'y_max',
        11 => 'z_min',
        12 => 'z_max',
        13 => 'luminosity',
        14 => 'border',
        15 => 'fringe',
        16 => 'corridor',
        17 => 'hub',
        18 => 'international',
        19 => 'regional',
        20 => 'constellation',
        21 => 'security',
        22 => 'faction_id',
        23 => 'radius',
        24 => 'sun_type_id',
        25 => 'security_class',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('map_solar_systems')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> map_solar_systems');
        $this->setProgressMax(8030);

        $data = include(__DIR__ . '/data/map_solar_systems_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        SolarSystem::create($data);
        $this->progress();
    }

}
