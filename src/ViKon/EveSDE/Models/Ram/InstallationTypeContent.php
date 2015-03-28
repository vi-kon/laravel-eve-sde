<?php

namespace ViKon\EveSDE\Models\Ram;

use Illuminate\Database\Eloquent\Model;

class InstallationTypeContent extends Model {
    /**
     *
     * Disable updated_at and created_at columns
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * The database table used by the model (mysql).
     *
     * @var string
     */
    protected $table = 'ram_installation_type_contents';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'ram_installation_type_contents';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function assemblyLineType() {
        return $this->hasOne('ViKon\EveSDE\Models\Ram\AssemblyLineTypes', 'assembly_line_type_id', 'assembly_line_type_id');
    }
}
