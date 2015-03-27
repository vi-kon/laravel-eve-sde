<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Corporation\NPCCorporationDivisions;
use ViKon\Utilities\ConsoleProgress;

class CrpNPCCorporationDivisionsSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'corporation_id',
        1 => 'division_id',
        2 => 'size',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('crp_n_p_c_corporation_divisions')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed crp_n_p_c_corporation_divisions table');
        $this->setProgressMax(380);

        $data = include(__DIR__ . '/data/crp_n_p_c_corporation_divisions_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        NPCCorporationDivisions::create($data);
        $this->progress();
    }

}
