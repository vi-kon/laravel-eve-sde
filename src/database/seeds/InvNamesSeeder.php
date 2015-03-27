<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Inventory\Names;
use ViKon\Utilities\ConsoleProgress;

class InvNamesSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'item_id',
        1 => 'item_name',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('inv_names')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed inv_names table');
        $this->setProgressMax(519863);

        $data = include(__DIR__ . '/data/inv_names_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Names::create($data);
        $this->progress();
    }

}
