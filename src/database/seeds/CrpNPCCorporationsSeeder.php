<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Corporation\NPCCorporation;
use ViKon\Utilities\ConsoleProgressbar;

class CrpNPCCorporationsSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0  => 'corporation_id',
        1  => 'size',
        2  => 'extent',
        3  => 'solar_system_id',
        4  => 'investor_id1',
        5  => 'investor_shares1',
        6  => 'investor_id2',
        7  => 'investor_shares2',
        8  => 'investor_id3',
        9  => 'investor_shares3',
        10 => 'investor_id4',
        11 => 'investor_shares4',
        12 => 'friend_id',
        13 => 'enemy_id',
        14 => 'public_shares',
        15 => 'initial_price',
        16 => 'min_security',
        17 => 'scattered',
        18 => 'fringe',
        19 => 'corridor',
        20 => 'hub',
        21 => 'border',
        22 => 'faction_id',
        23 => 'size_factor',
        24 => 'station_count',
        25 => 'station_system_count',
        26 => 'description',
        27 => 'icon_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('crp_n_p_c_corporations')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> crp_n_p_c_corporations');
        $this->setProgressMax(234);

        $data = include(__DIR__ . '/data/crp_n_p_c_corporations_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        NPCCorporation::create($data);
        $this->progress();
    }

}
