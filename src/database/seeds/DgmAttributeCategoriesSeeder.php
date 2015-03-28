<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Damage\AttributeCategory;
use ViKon\Utilities\ConsoleProgressbar;

class DgmAttributeCategoriesSeeder extends Seeder {
    use ConsoleProgressbar;

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
        $this->startProgress('<info>Inserting data:</info> dgm_attribute_categories');
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
        AttributeCategory::create($data);
        $this->progress();
    }

}
