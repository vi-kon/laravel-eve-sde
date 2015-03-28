<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Inventory\UniqueName;
use ViKon\Utilities\ConsoleProgressbar;

class InvUniqueNamesSeeder extends Seeder {
    use ConsoleProgressbar;

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
        $this->startProgress('<info>Inserting data:</info> inv_unique_names');
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
        UniqueName::create($data);
        $this->progress();
    }

}
