<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Map\Regions;
use ViKon\Utilities\ConsoleProgress;

class MapRegionsSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0  => 'region_id',
        1  => 'region_name',
        2  => 'x',
        3  => 'y',
        4  => 'z',
        5  => 'x_min',
        6  => 'x_max',
        7  => 'y_min',
        8  => 'y_max',
        9  => 'z_min',
        10 => 'z_max',
        11 => 'faction_id',
        12 => 'radius',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('map_regions')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed map_regions table');
        $this->setProgressMax(99);

        $data = include(__DIR__ . '/data/map_regions_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Regions::create($data);
        $this->progress();
    }

}
