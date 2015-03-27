<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Damage\AttributeTypes;
use ViKon\Utilities\ConsoleProgress;

class DgmAttributeTypesSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0  => 'attribute_id',
        1  => 'attribute_name',
        2  => 'description',
        3  => 'icon_id',
        4  => 'default_value',
        5  => 'published',
        6  => 'display_name',
        7  => 'unit_id',
        8  => 'stackable',
        9  => 'high_is_good',
        10 => 'category_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('dgm_attribute_types')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed dgm_attribute_types table');
        $this->setProgressMax(1798);

        $data = include(__DIR__ . '/data/dgm_attribute_types_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        AttributeTypes::create($data);
        $this->progress();
    }

}
