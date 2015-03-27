<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Damage\TypeAttributes;
use ViKon\Utilities\ConsoleProgress;

class DgmTypeAttributesSeeder extends Seeder {
    use ConsoleProgress;

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
        $this->startProgress('Seed dgm_type_attributes table');
        $this->setProgressMax(155937);

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
        TypeAttributes::create($data);
        $this->progress();
    }

}
