<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Map\CelestialStatistics;
use ViKon\Utilities\ConsoleProgress;

class MapCelestialStatisticsSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0  => 'celestial_id',
        1  => 'temperature',
        2  => 'spectral_class',
        3  => 'luminosity',
        4  => 'age',
        5  => 'life',
        6  => 'ortinyint_radius',
        7  => 'eccentricity',
        8  => 'mass_dust',
        9  => 'mass_gas',
        10 => 'fragmented',
        11 => 'density',
        12 => 'surface_gravity',
        13 => 'escape_velocity',
        14 => 'ortinyint_period',
        15 => 'rotation_rate',
        16 => 'locked',
        17 => 'pressure',
        18 => 'radius',
        19 => 'mass',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('map_celestial_statistics')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed map_celestial_statistics table');
        $this->setProgressMax(471537);

        $data = include(__DIR__ . '/data/map_celestial_statistics_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        CelestialStatistics::create($data);
        $this->progress();
    }

}
