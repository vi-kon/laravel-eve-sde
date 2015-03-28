<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Damage\TypeEffect;
use ViKon\Utilities\ConsoleProgressbar;

class DgmTypeEffectsSeeder extends Seeder {
    use ConsoleProgressbar;

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
        $this->startProgress('<info>Inserting data:</info> dgm_type_effects');
        $this->setProgressMax(36515);

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
        TypeEffect::create($data);
        $this->progress();
    }

}
