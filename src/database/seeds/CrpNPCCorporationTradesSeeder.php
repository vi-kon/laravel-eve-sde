<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Corporation\NPCCorporationTrade;
use ViKon\Utilities\ConsoleProgressbar;

class CrpNPCCorporationTradesSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'corporation_id',
        1 => 'type_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('crp_n_p_c_corporation_trades')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> crp_n_p_c_corporation_trades');
        $this->setProgressMax(17923);

        $data = include(__DIR__ . '/data/crp_n_p_c_corporation_trades_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        NPCCorporationTrade::create($data);
        $this->progress();
    }

}
