<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Damage\AttributeCategories;
use ViKon\Utilities\ConsoleProgress;

class DgmAttributeCategoriesSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'category_id',
        1 => 'category_name',
        2 => 'category_description',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('dgm_attribute_categories')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed dgm_attribute_categories table');
        $this->setProgressMax(27);

        $data = include(__DIR__ . '/data/dgm_attribute_categories_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        AttributeCategories::create($data);
        $this->progress();
    }

}
