<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Damage\TypeAttribute;
use ViKon\Utilities\ConsoleProgressbar;

class DgmTypeAttributesSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'type_id',
        1 => 'attribute_id',
        2 => 'value_int',
        3 => 'value_float',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('dgm_type_attributes')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> dgm_type_attributes');
        $this->setProgressMax(156071);

        $data = include(__DIR__ . '/data/dgm_type_attributes_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        TypeAttribute::create($data);
        $this->progress();
    }

}
