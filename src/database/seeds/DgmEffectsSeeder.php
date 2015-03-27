<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Damage\Effects;
use ViKon\Utilities\ConsoleProgress;

class DgmEffectsSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0  => 'effect_id',
        1  => 'effect_name',
        2  => 'effect_category',
        3  => 'pre_expression',
        4  => 'post_expression',
        5  => 'description',
        6  => 'guid',
        7  => 'icon_id',
        8  => 'is_offensive',
        9  => 'is_assistance',
        10 => 'duration_attribute_id',
        11 => 'tracking_speed_attribute_id',
        12 => 'discharge_attribute_id',
        13 => 'range_attribute_id',
        14 => 'falloff_attribute_id',
        15 => 'disallow_auto_repeat',
        16 => 'published',
        17 => 'display_name',
        18 => 'is_warp_safe',
        19 => 'range_chance',
        20 => 'electronic_chance',
        21 => 'propulsion_chance',
        22 => 'distribution',
        23 => 'sfx_name',
        24 => 'npc_usage_chance_attribute_id',
        25 => 'npc_activation_chance_attribute_id',
        26 => 'fitting_usage_chance_attribute_id',
        27 => 'modifier_info',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('dgm_effects')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed dgm_effects table');
        $this->setProgressMax(3560);

        $data = include(__DIR__ . '/data/dgm_effects_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Effects::create($data);
        $this->progress();
    }

}
