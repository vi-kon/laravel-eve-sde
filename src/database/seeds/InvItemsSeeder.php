<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Inventory\Item;
use ViKon\Utilities\ConsoleProgressbar;

class InvItemsSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'item_id',
        1 => 'type_id',
        2 => 'owner_id',
        3 => 'location_id',
        4 => 'flag_id',
        5 => 'quantity',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('inv_items')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> inv_items');
        $this->setProgressMax(531412);

        $data = include(__DIR__ . '/data/inv_items_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Item::create($data);
        $this->progress();
    }

}
