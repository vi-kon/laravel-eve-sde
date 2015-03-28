<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Inventory\TypeMaterial;
use ViKon\Utilities\ConsoleProgressbar;

class InvTypeMaterialsSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'type_id',
        1 => 'material_type_id',
        2 => 'quantity',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('inv_type_materials')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> inv_type_materials');
        $this->setProgressMax(33364);

        $data = include(__DIR__ . '/data/inv_type_materials_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        TypeMaterial::create($data);
        $this->progress();
    }

}
