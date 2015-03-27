<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Agent\ResearchAgents;
use ViKon\Utilities\ConsoleProgress;

class AgtResearchAgentsSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'agent_id',
        1 => 'type_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('agt_research_agents')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed agt_research_agents table');
        $this->setProgressMax(797);

        $data = include(__DIR__ . '/data/agt_research_agents_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        ResearchAgents::create($data);
        $this->progress();
    }

}
