<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Character\Bloodlines;
use ViKon\Utilities\ConsoleProgress;

class ChrBloodlinesSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0  => 'bloodline_id',
        1  => 'bloodline_name',
        2  => 'race_id',
        3  => 'description',
        4  => 'male_description',
        5  => 'female_description',
        6  => 'ship_type_id',
        7  => 'corporation_id',
        8  => 'perception',
        9  => 'willpower',
        10 => 'charisma',
        11 => 'memory',
        12 => 'intelligence',
        13 => 'icon_id',
        14 => 'short_description',
        15 => 'short_male_description',
        16 => 'short_female_description',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('chr_bloodlines')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed chr_bloodlines table');
        $this->setProgressMax(15);

        $data = include(__DIR__ . '/data/chr_bloodlines_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Bloodlines::create($data);
        $this->progress();
    }

}
