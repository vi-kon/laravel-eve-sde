<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Planet\SchematicsTypeMap;
use ViKon\Utilities\ConsoleProgress;

class PlanetSchematicsTypeMapSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'schematic_id',
        1 => 'type_id',
        2 => 'quantity',
        3 => 'is_input',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('planet_schematics_type_map')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed planet_schematics_type_map table');
        $this->setProgressMax(203);

        $data = include(__DIR__ . '/data/planet_schematics_type_map_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        SchematicsTypeMap::create($data);
        $this->progress();
    }

}
