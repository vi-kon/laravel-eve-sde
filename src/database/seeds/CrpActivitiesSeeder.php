<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Corporation\Activities;
use ViKon\Utilities\ConsoleProgress;

class CrpActivitiesSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'activity_id',
        1 => 'activity_name',
        2 => 'description',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('crp_activities')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed crp_activities table');
        $this->setProgressMax(20);

        $data = include(__DIR__ . '/data/crp_activities_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Activities::create($data);
        $this->progress();
    }

}
