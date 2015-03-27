<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Inventory\TypeReactions;
use ViKon\Utilities\ConsoleProgress;

class InvTypeReactionsSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'reaction_type_id',
        1 => 'input',
        2 => 'type_id',
        3 => 'quantity',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('inv_type_reactions')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed inv_type_reactions table');
        $this->setProgressMax(372);

        $data = include(__DIR__ . '/data/inv_type_reactions_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        TypeReactions::create($data);
        $this->progress();
    }

}
