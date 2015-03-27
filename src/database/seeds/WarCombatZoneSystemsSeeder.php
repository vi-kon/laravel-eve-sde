<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\War\CombatZoneSystems;
use ViKon\Utilities\ConsoleProgress;

class WarCombatZoneSystemsSeeder extends Seeder {
    use ConsoleProgress;

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
        $this->startProgress('Seed war_combat_zone_systems table');
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
        CombatZoneSystems::create($data);
        $this->progress();
    }

}
