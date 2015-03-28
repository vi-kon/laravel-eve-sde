<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Ram\AssemblyLineTypeDetailPerGroup;
use ViKon\Utilities\ConsoleProgressbar;

class RamAssemblyLineTypeDetailPerGroupSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'assembly_line_type_id',
        1 => 'group_id',
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
        DB::table('ram_assembly_line_type_detail_per_group')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> ram_assembly_line_type_detail_per_group');
        $this->setProgressMax(1844);

        $data = include(__DIR__ . '/data/ram_assembly_line_type_detail_per_group_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        AssemblyLineTypeDetailPerGroup::create($data);
        $this->progress();
    }

}
