<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Damage\AttributeType;
use ViKon\Utilities\ConsoleProgressbar;

class DgmAttributeTypesSeeder extends Seeder {
    use ConsoleProgressbar;

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
        $this->startProgress('<info>Inserting data:</info> dgm_attribute_types');
        $this->setProgressMax(1799);

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
        AttributeType::create($data);
        $this->progress();
    }

}
