<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Inventory\Groups;
use ViKon\Utilities\ConsoleProgress;

class InvGroupsSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0  => 'group_id',
        1  => 'category_id',
        2  => 'group_name',
        3  => 'description',
        4  => 'icon_id',
        5  => 'use_base_price',
        6  => 'allow_manufacture',
        7  => 'allow_recycler',
        8  => 'anchored',
        9  => 'anchorable',
        10 => 'fittable_non_singleton',
        11 => 'published',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('inv_groups')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed inv_groups table');
        $this->setProgressMax(996);

        $data = include(__DIR__ . '/data/inv_groups_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Groups::create($data);
        $this->progress();
    }

}
