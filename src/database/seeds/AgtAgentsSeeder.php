<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Agent\Agent;
use ViKon\Utilities\ConsoleProgressbar;

class AgtAgentsSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'agent_id',
        1 => 'division_id',
        2 => 'corporation_id',
        3 => 'location_id',
        4 => 'level',
        5 => 'quality',
        6 => 'agent_type_id',
        7 => 'is_locator',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('agt_agents')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> agt_agents');
        $this->setProgressMax(10975);

        $data = include(__DIR__ . '/data/agt_agents_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Agent::create($data);
        $this->progress();
    }

}
