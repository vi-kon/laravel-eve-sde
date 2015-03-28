<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Corporation\NPCCorporationDivision;
use ViKon\Utilities\ConsoleProgressbar;

class CrpNPCCorporationDivisionsSeeder extends Seeder {
    use ConsoleProgressbar;

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
        $this->startProgress('<info>Inserting data:</info> crp_n_p_c_corporation_divisions');
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
        NPCCorporationDivision::create($data);
        $this->progress();
    }

}
