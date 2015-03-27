<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Planet\Schematics;
use ViKon\Utilities\ConsoleProgress;

class PlanetSchematicsSeeder extends Seeder {
    use ConsoleProgress;

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
        $this->startProgress('Seed planet_schematics table');
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
        Schematics::create($data);
        $this->progress();
    }

}
