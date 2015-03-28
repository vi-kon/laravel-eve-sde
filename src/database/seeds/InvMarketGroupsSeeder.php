<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Inventory\MarketGroup;
use ViKon\Utilities\ConsoleProgressbar;

class InvMarketGroupsSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'market_group_id',
        1 => 'parent_group_id',
        2 => 'market_group_name',
        3 => 'description',
        4 => 'icon_id',
        5 => 'has_types',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('inv_market_groups')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> inv_market_groups');
        $this->setProgressMax(1774);

        $data = include(__DIR__ . '/data/inv_market_groups_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        MarketGroup::create($data);
        $this->progress();
    }

}
