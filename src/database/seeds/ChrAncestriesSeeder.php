<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Character\Ancestry;
use ViKon\Utilities\ConsoleProgressbar;

class ChrAncestriesSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0  => 'ancestry_id',
        1  => 'ancestry_name',
        2  => 'bloodline_id',
        3  => 'description',
        4  => 'perception',
        5  => 'willpower',
        6  => 'charisma',
        7  => 'memory',
        8  => 'intelligence',
        9  => 'icon_id',
        10 => 'short_description',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('chr_ancestries')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> chr_ancestries');
        $this->setProgressMax(42);

        $data = include(__DIR__ . '/data/chr_ancestries_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Ancestry::create($data);
        $this->progress();
    }

}
