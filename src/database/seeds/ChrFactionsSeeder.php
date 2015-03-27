<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Character\Factions;
use ViKon\Utilities\ConsoleProgress;

class ChrFactionsSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0  => 'faction_id',
        1  => 'faction_name',
        2  => 'description',
        3  => 'race_ids',
        4  => 'solar_system_id',
        5  => 'corporation_id',
        6  => 'size_factor',
        7  => 'station_count',
        8  => 'station_system_count',
        9  => 'militia_corporation_id',
        10 => 'icon_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('chr_factions')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed chr_factions table');
        $this->setProgressMax(20);

        $data = include(__DIR__ . '/data/chr_factions_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Factions::create($data);
        $this->progress();
    }

}
