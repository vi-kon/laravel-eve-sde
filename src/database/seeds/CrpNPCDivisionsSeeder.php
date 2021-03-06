<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Corporation\NPCDivision;
use ViKon\Utilities\ConsoleProgressbar;

class CrpNPCDivisionsSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'division_id',
        1 => 'division_name',
        2 => 'description',
        3 => 'leader_type',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('crp_n_p_c_divisions')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> crp_n_p_c_divisions');
        $this->setProgressMax(29);

        $data = include(__DIR__ . '/data/crp_n_p_c_divisions_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        NPCDivision::create($data);
        $this->progress();
    }

}
