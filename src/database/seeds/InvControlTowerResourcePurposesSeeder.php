<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Inventory\ControlTowerResourcePurposes;
use ViKon\Utilities\ConsoleProgress;

class InvControlTowerResourcePurposesSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'purpose',
        1 => 'purpose_text',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('inv_control_tower_resource_purposes')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed inv_control_tower_resource_purposes table');
        $this->setProgressMax(4);

        $data = include(__DIR__ . '/data/inv_control_tower_resource_purposes_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        ControlTowerResourcePurposes::create($data);
        $this->progress();
    }

}
