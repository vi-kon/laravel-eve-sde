<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Ram\AssemblyLineStation;
use ViKon\Utilities\ConsoleProgressbar;

class RamAssemblyLineStationsSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'station_id',
        1 => 'assembly_line_type_id',
        2 => 'quantity',
        3 => 'station_type_id',
        4 => 'owner_id',
        5 => 'solar_system_id',
        6 => 'region_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('ram_assembly_line_stations')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> ram_assembly_line_stations');
        $this->setProgressMax(4393);

        $data = include(__DIR__ . '/data/ram_assembly_line_stations_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        AssemblyLineStation::create($data);
        $this->progress();
    }

}
