<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Map\RegionJump;
use ViKon\Utilities\ConsoleProgressbar;

class MapRegionJumpsSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'from_region_id',
        1 => 'to_region_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('map_region_jumps')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> map_region_jumps');
        $this->setProgressMax(306);

        $data = include(__DIR__ . '/data/map_region_jumps_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        RegionJump::create($data);
        $this->progress();
    }

}
