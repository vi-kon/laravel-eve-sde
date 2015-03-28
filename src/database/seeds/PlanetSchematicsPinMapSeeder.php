<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Planet\SchematicsPinMap;
use ViKon\Utilities\ConsoleProgressbar;

class PlanetSchematicsPinMapSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'schematic_id',
        1 => 'pin_type_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('planet_schematics_pin_map')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> planet_schematics_pin_map');
        $this->setProgressMax(496);

        $data = include(__DIR__ . '/data/planet_schematics_pin_map_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        SchematicsPinMap::create($data);
        $this->progress();
    }

}
