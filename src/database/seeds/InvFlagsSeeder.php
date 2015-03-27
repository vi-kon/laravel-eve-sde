<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Inventory\Flags;
use ViKon\Utilities\ConsoleProgress;

class InvFlagsSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'flag_id',
        1 => 'flag_name',
        2 => 'flag_text',
        3 => 'order_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('inv_flags')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed inv_flags table');
        $this->setProgressMax(133);

        $data = include(__DIR__ . '/data/inv_flags_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Flags::create($data);
        $this->progress();
    }

}