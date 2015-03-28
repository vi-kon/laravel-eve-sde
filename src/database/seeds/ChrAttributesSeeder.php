<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Character\Attribute;
use ViKon\Utilities\ConsoleProgressbar;

class ChrAttributesSeeder extends Seeder {
    use ConsoleProgressbar;

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
        $this->startProgress('<info>Inserting data:</info> chr_attributes');
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
        Attribute::create($data);
        $this->progress();
    }

}
