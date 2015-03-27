<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Inventory\ControlTowerResources;
use ViKon\Utilities\ConsoleProgress;

class InvControlTowerResourcesSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'control_tower_type_id',
        1 => 'resource_type_id',
        2 => 'purpose',
        3 => 'quantity',
        4 => 'min_security_level',
        5 => 'faction_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('inv_control_tower_resources')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed inv_control_tower_resources table');
        $this->setProgressMax(339);

        $data = include(__DIR__ . '/data/inv_control_tower_resources_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        ControlTowerResources::create($data);
        $this->progress();
    }

}
