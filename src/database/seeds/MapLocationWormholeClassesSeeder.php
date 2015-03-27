<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Map\LocationWormholeClasses;
use ViKon\Utilities\ConsoleProgress;

class MapLocationWormholeClassesSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'location_id',
        1 => 'wormhole_class_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('map_location_wormhole_classes')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed map_location_wormhole_classes table');
        $this->setProgressMax(793);

        $data = include(__DIR__ . '/data/map_location_wormhole_classes_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        LocationWormholeClasses::create($data);
        $this->progress();
    }

}
