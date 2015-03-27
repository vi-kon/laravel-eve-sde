<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Station\Services;
use ViKon\Utilities\ConsoleProgress;

class StaServicesSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'service_id',
        1 => 'service_name',
        2 => 'description',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('sta_services')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed sta_services table');
        $this->setProgressMax(27);

        $data = include(__DIR__ . '/data/sta_services_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Services::create($data);
        $this->progress();
    }

}
