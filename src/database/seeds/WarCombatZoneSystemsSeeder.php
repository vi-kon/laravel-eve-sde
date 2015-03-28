<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\War\CombatZoneSystem;
use ViKon\Utilities\ConsoleProgressbar;

class WarCombatZoneSystemsSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'solar_system_id',
        1 => 'combat_zone_id',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('war_combat_zone_systems')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> war_combat_zone_systems');
        $this->setProgressMax(171);

        $data = include(__DIR__ . '/data/war_combat_zone_systems_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        CombatZoneSystem::create($data);
        $this->progress();
    }

}
