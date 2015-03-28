<?php

use Illuminate\Database\Seeder;
use ViKon\EveSDE\Models\Ram\InstallationTypeContent;
use ViKon\Utilities\ConsoleProgressbar;

class RamInstallationTypeContentsSeeder extends Seeder {
    use ConsoleProgressbar;

    protected $output;

    protected $structure = [
        0 => 'installation_type_id',
        1 => 'assembly_line_type_id',
        2 => 'quantity',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('ram_installation_type_contents')->delete();

        $this->output = $this->command->getOutput();

        $this->initProgressbar();
        $this->startProgress('<info>Inserting data:</info> ram_installation_type_contents');
        $this->setProgressMax(362);

        $data = include(__DIR__ . '/data/ram_installation_type_contents_table_data.php');
        foreach ($data as $row) {
            $this->create($row);
        }
    }

    protected function create($values) {
        $data = [];
        foreach ($this->structure as $i => $key) {
            $data[$key] = $values[$i];
        }
        InstallationTypeContent::create($data);
        $this->progress();
    }

}
