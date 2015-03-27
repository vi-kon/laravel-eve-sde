<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\War\CombatZones;
use ViKon\Utilities\ConsoleProgress;

class WarCombatZonesSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'combat_zone_id',
        1 => 'combat_zone_name',
        2 => 'faction_id',
        3 => 'center_system_id',
        4 => 'description',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('war_combat_zones')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed war_combat_zones table');
        $this->setProgressMax(4);

        $data = include(__DIR__ . '/data/war_combat_zones_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        CombatZones::create($data);
        $this->progress();
    }

}