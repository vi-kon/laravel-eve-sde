<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Inventory\ContrabandTypes;
use ViKon\Utilities\ConsoleProgress;

class InvContrabandTypesSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'faction_id',
        1 => 'type_id',
        2 => 'standing_loss',
        3 => 'confiscate_min_sec',
        4 => 'fine_by_value',
        5 => 'attack_min_sec',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('inv_contraband_types')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed inv_contraband_types table');
        $this->setProgressMax(426);

        $data = include(__DIR__ . '/data/inv_contraband_types_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        ContrabandTypes::create($data);
        $this->progress();
    }

}
