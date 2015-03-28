<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Inventory\Position;
use ViKon\Utilities\ConsoleProgressbar;

class InvPositionsSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'item_id',
        1 => 'x',
        2 => 'y',
        3 => 'z',
        4 => 'yaw',
        5 => 'pitch',
        6 => 'roll',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('inv_positions')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> inv_positions');
        $this->setProgressMax(508331);

        $data = include(__DIR__ . '/data/inv_positions_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Position::create($data);
        $this->progress();
    }

}
