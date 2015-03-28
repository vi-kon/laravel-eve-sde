<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Inventory\Name;
use ViKon\Utilities\ConsoleProgressbar;

class InvNamesSeeder extends Seeder {
    use ConsoleProgressbar;

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
        $this->startProgress('<info>Inserting data:</info> inv_names');
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
        Name::create($data);
        $this->progress();
    }

}
