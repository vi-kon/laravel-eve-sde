<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Character\Attributes;
use ViKon\Utilities\ConsoleProgress;

class ChrAttributesSeeder extends Seeder {
    use ConsoleProgress;

    protected $output;

    protected $structure = [
        0 => 'attribute_id',
        1 => 'attribute_name',
        2 => 'description',
        3 => 'icon_id',
        4 => 'short_description',
        5 => 'notes',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('chr_attributes')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('Seed chr_attributes table');
        $this->setProgressMax(5);

        $data = include(__DIR__ . '/data/chr_attributes_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        Attributes::create($data);
        $this->progress();
    }

}
