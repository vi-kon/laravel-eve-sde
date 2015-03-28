<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Inventory\MetaType;
use ViKon\Utilities\ConsoleProgressbar;

class InvMetaTypesSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'type_id',
        1 => 'parent_type_id',
        2 => 'meta_group_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('inv_meta_types')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> inv_meta_types');
        $this->setProgressMax(4171);

        $data = include(__DIR__ . '/data/inv_meta_types_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        MetaType::create($data);
        $this->progress();
    }

}
