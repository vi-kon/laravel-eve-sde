<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Station\OperationServices;
use ViKon\Utilities\ConsoleProgress;

class StaOperationServicesSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'operation_id',
        1 => 'service_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('sta_operation_services')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed sta_operation_services table');
        $this->setProgressMax(795);

        $data = include(__DIR__ . '/data/sta_operation_services_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        OperationServices::create($data);
        $this->progress();
    }

}
