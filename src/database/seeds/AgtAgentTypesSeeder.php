<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Agent\AgentType;
use ViKon\Utilities\ConsoleProgressbar;

class AgtAgentTypesSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'agent_type_id',
        1 => 'agent_type',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('agt_agent_types')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> agt_agent_types');
        $this->setProgressMax(12);

        $data = include(__DIR__ . '/data/agt_agent_types_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        AgentType::create($data);
        $this->progress();
    }

}
