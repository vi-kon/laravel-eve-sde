<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Planet\Schematic;
use ViKon\Utilities\ConsoleProgressbar;

class PlanetSchematicsSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'schematic_id',
        1 => 'schematic_name',
        2 => 'cycle_time',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('planet_schematics')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> planet_schematics');
        $this->setProgressMax(68);

        $data = include(__DIR__ . '/data/planet_schematics_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Schematic::create($data);
        $this->progress();
    }

}
