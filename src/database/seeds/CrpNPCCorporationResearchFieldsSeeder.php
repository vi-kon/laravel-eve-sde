<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Corporation\NPCCorporationResearchFields;
use ViKon\Utilities\ConsoleProgress;

class CrpNPCCorporationResearchFieldsSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'skill_id',
        1 => 'corporation_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('crp_n_p_c_corporation_research_fields')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed crp_n_p_c_corporation_research_fields table');
        $this->setProgressMax(48);

        $data = include(__DIR__ . '/data/crp_n_p_c_corporation_research_fields_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        NPCCorporationResearchFields::create($data);
        $this->progress();
    }

}
