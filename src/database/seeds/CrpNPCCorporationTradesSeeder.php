<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Corporation\NPCCorporationTrades;
use ViKon\Utilities\ConsoleProgress;

class CrpNPCCorporationTradesSeeder extends Seeder {
    use ConsoleProgress;

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
        $this->startProgress('Seed crp_n_p_c_corporation_trades table');
        $this->setProgressMax(17752);

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
        NPCCorporationTrades::create($data);
        $this->progress();
    }

}
