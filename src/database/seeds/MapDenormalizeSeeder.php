<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Map\Denormalize;
use ViKon\Utilities\ConsoleProgressbar;

class MapDenormalizeSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0  => 'item_id',
        1  => 'type_id',
        2  => 'group_id',
        3  => 'solar_system_id',
        4  => 'constellation_id',
        5  => 'region_id',
        6  => 'orbit_id',
        7  => 'x',
        8  => 'y',
        9  => 'z',
        10 => 'radius',
        11 => 'item_name',
        12 => 'security',
        13 => 'celestial_index',
        14 => 'orbit_index',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('map_denormalize')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> map_denormalize');
        $this->setProgressMax(502999);

        $data = include(__DIR__ . '/data/map_denormalize_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Denormalize::create($data);
        $this->progress();
    }

}
