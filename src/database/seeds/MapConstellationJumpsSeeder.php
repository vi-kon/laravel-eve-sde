<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Map\ConstellationJump;
use ViKon\Utilities\ConsoleProgressbar;

class MapConstellationJumpsSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'from_region_id',
        1 => 'from_constellation_id',
        2 => 'to_constellation_id',
        3 => 'to_region_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('map_constellation_jumps')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> map_constellation_jumps');
        $this->setProgressMax(2292);

        $data = include(__DIR__ . '/data/map_constellation_jumps_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        ConstellationJump::create($data);
        $this->progress();
    }

}
