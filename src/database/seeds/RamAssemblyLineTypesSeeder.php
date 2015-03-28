<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Ram\AssemblyLineType;
use ViKon\Utilities\ConsoleProgressbar;

class RamAssemblyLineTypesSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'assembly_line_type_id',
        1 => 'assembly_line_type_name',
        2 => 'description',
        3 => 'base_time_multiplier',
        4 => 'base_material_multiplier',
        5 => 'base_cost_multiplier',
        6 => 'volume',
        7 => 'activity_id',
        8 => 'min_cost_per_hour',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('ram_assembly_line_types')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> ram_assembly_line_types');
        $this->setProgressMax(134);

        $data = include(__DIR__ . '/data/ram_assembly_line_types_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        AssemblyLineType::create($data);
        $this->progress();
    }

}
