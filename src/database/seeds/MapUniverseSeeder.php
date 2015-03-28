<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Map\Universe;
use ViKon\Utilities\ConsoleProgressbar;

class MapUniverseSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0  => 'universe_id',
        1  => 'universe_name',
        2  => 'x',
        3  => 'y',
        4  => 'z',
        5  => 'x_min',
        6  => 'x_max',
        7  => 'y_min',
        8  => 'y_max',
        9  => 'z_min',
        10 => 'z_max',
        11 => 'radius',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('map_universe')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> map_universe');
        $this->setProgressMax(2);

        $data = include(__DIR__ . '/data/map_universe_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Universe::create($data);
        $this->progress();
    }

}
