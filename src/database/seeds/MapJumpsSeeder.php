<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Map\Jump;
use ViKon\Utilities\ConsoleProgressbar;

class MapJumpsSeeder extends Seeder {
    use ConsoleProgressbar;

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
        $this->startProgress('<info>Inserting data:</info> map_jumps');
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
        Jump::create($data);
        $this->progress();
    }

}
