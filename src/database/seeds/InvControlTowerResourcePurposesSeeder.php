<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Inventory\ControlTowerResourcePurpose;
use ViKon\Utilities\ConsoleProgressbar;

class InvControlTowerResourcePurposesSeeder extends Seeder {
    use ConsoleProgressbar;

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
        $this->startProgress('<info>Inserting data:</info> inv_control_tower_resource_purposes');
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
        ControlTowerResourcePurpose::create($data);
        $this->progress();
    }

}
