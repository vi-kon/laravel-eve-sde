<?php

namespace ViKon\EveSDE\Models\Planet;

use Illuminate\Database\Eloquent\Model;

class SchematicsTypeMap extends Model {
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
    protected $table = 'planet_schematics_type_map';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'planet_schematics_type_map';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Types', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function schematic() {
        return $this->hasOne('ViKon\EveSDE\Models\Planet\Schematics', 'schematic_id', 'schematic_id');
    }
}
