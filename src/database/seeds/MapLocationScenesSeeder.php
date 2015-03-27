<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Map\LocationScenes;
use ViKon\Utilities\ConsoleProgress;

class MapLocationScenesSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'location_id',
        1 => 'graphic_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('map_location_scenes')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed map_location_scenes table');
        $this->setProgressMax(99);

        $data = include(__DIR__ . '/data/map_location_scenes_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        LocationScenes::create($data);
        $this->progress();
    }

}
