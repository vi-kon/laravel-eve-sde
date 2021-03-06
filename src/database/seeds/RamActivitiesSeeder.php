<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Ram\Activity;
use ViKon\Utilities\ConsoleProgressbar;

class RamActivitiesSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'activity_id',
        1 => 'activity_name',
        2 => 'icon_no',
        3 => 'description',
        4 => 'published',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('ram_activities')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> ram_activities');
        $this->setProgressMax(9);

        $data = include(__DIR__ . '/data/ram_activities_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Activity::create($data);
        $this->progress();
    }

}
