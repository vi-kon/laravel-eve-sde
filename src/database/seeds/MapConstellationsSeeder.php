<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Map\Constellation;
use ViKon\Utilities\ConsoleProgressbar;

class MapConstellationsSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0  => 'region_id',
        1  => 'constellation_id',
        2  => 'constellation_name',
        3  => 'x',
        4  => 'y',
        5  => 'z',
        6  => 'x_min',
        7  => 'x_max',
        8  => 'y_min',
        9  => 'y_max',
        10 => 'z_min',
        11 => 'z_max',
        12 => 'faction_id',
        13 => 'radius',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('map_constellations')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> map_constellations');
        $this->setProgressMax(1119);

        $data = include(__DIR__ . '/data/map_constellations_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Constellation::create($data);
        $this->progress();
    }

}
