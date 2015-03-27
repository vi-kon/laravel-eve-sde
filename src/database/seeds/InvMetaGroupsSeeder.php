<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Inventory\MetaGroups;
use ViKon\Utilities\ConsoleProgress;

class InvMetaGroupsSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'meta_group_id',
        1 => 'meta_group_name',
        2 => 'description',
        3 => 'icon_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('inv_meta_groups')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed inv_meta_groups table');
        $this->setProgressMax(14);

        $data = include(__DIR__ . '/data/inv_meta_groups_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        MetaGroups::create($data);
        $this->progress();
    }

}
