<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Character\Race;
use ViKon\Utilities\ConsoleProgressbar;

class ChrRacesSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'race_id',
        1 => 'race_name',
        2 => 'description',
        3 => 'icon_id',
        4 => 'short_description',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('chr_races')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> chr_races');
        $this->setProgressMax(8);

        $data = include(__DIR__ . '/data/chr_races_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Race::create($data);
        $this->progress();
    }

}
