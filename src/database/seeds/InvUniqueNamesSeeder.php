<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Inventory\UniqueNames;
use ViKon\Utilities\ConsoleProgress;

class InvUniqueNamesSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'item_id',
        1 => 'item_name',
        2 => 'group_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('inv_unique_names')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed inv_unique_names table');
        $this->setProgressMax(365405);

        $data = include(__DIR__ . '/data/inv_unique_names_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        UniqueNames::create($data);
        $this->progress();
    }

}
