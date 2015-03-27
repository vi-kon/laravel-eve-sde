<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Map\Jumps;
use ViKon\Utilities\ConsoleProgress;

class MapJumpsSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'stargate_id',
        1 => 'destination_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('map_jumps')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed map_jumps table');
        $this->setProgressMax(13826);

        $data = include(__DIR__ . '/data/map_jumps_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Jumps::create($data);
        $this->progress();
    }

}
