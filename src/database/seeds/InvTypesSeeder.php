<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Inventory\Type;
use ViKon\Utilities\ConsoleProgressbar;

class InvTypesSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0  => 'type_id',
        1  => 'group_id',
        2  => 'type_name',
        3  => 'description',
        4  => 'mass',
        5  => 'volume',
        6  => 'capacity',
        7  => 'portion_size',
        8  => 'race_id',
        9  => 'base_price',
        10 => 'published',
        11 => 'market_group_id',
        12 => 'chance_of_duplicating',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('inv_types')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> inv_types');
        $this->setProgressMax(22531);

        $data = include(__DIR__ . '/data/inv_types_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Type::create($data);
        $this->progress();
    }

}
