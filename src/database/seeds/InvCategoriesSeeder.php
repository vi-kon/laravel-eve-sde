<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Inventory\Category;
use ViKon\Utilities\ConsoleProgressbar;

class InvCategoriesSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'category_id',
        1 => 'category_name',
        2 => 'description',
        3 => 'icon_id',
        4 => 'published',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('inv_categories')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> inv_categories');
        $this->setProgressMax(39);

        $data = include(__DIR__ . '/data/inv_categories_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Category::create($data);
        $this->progress();
    }

}
