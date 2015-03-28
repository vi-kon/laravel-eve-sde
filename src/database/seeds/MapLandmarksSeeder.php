<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Map\Landmark;
use ViKon\Utilities\ConsoleProgressbar;

class MapLandmarksSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'landmark_id',
        1 => 'landmark_name',
        2 => 'description',
        3 => 'location_id',
        4 => 'x',
        5 => 'y',
        6 => 'z',
        7 => 'icon_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('map_landmarks')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> map_landmarks');
        $this->setProgressMax(45);

        $data = include(__DIR__ . '/data/map_landmarks_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Landmark::create($data);
        $this->progress();
    }

}
