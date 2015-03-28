<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Damage\Expression;
use ViKon\Utilities\ConsoleProgressbar;

class DgmExpressionsSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'expression_id',
        1 => 'operand_id',
        2 => 'arg1',
        3 => 'arg2',
        4 => 'expression_value',
        5 => 'description',
        6 => 'expression_name',
        7 => 'expression_type_id',
        8 => 'expression_group_id',
        9 => 'expression_attribute_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('dgm_expressions')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> dgm_expressions');
        $this->setProgressMax(17235);

        $data = include(__DIR__ . '/data/dgm_expressions_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Expression::create($data);
        $this->progress();
    }

}
