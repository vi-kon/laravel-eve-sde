<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Agent\ResearchAgent;
use ViKon\Utilities\ConsoleProgressbar;

class AgtResearchAgentsSeeder extends Seeder {
    use ConsoleProgressbar;

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
        $this->startProgress('<info>Inserting data:</info> agt_research_agents');
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
        ResearchAgent::create($data);
        $this->progress();
    }

}
