<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Ram\AssemblyLineTypeDetailPerCategory;
use ViKon\Utilities\ConsoleProgressbar;

class RamAssemblyLineTypeDetailPerCategorySeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'assembly_line_type_id',
        1 => 'category_id',
        2 => 'time_multiplier',
        3 => 'material_multiplier',
        4 => 'cost_multiplier',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('ram_assembly_line_type_detail_per_category')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> ram_assembly_line_type_detail_per_category');
        $this->setProgressMax(666);

        $data = include(__DIR__ . '/data/ram_assembly_line_type_detail_per_category_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        AssemblyLineTypeDetailPerCategory::create($data);
        $this->progress();
    }

}
