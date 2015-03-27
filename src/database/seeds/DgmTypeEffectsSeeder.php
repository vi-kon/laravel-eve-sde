<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Damage\TypeEffects;
use ViKon\Utilities\ConsoleProgress;

class DgmTypeEffectsSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'type_id',
        1 => 'effect_id',
        2 => 'is_default',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('dgm_type_effects')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed dgm_type_effects table');
        $this->setProgressMax(36498);

        $data = include(__DIR__ . '/data/dgm_type_effects_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        TypeEffects::create($data);
        $this->progress();
    }

}
