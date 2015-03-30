<?php

namespace ViKon\EveSDE\Models\Planet;

use Illuminate\Database\Eloquent\Model;

class SchematicsPinMap extends Model {
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
    protected $table = 'planet_schematics_pin_map';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'planet_schematics_pin_map';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function schematic() {
        return $this->hasOne('ViKon\EveSDE\Models\Planet\Schematic', 'schematic_id', 'schematic_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pinType() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'pin_type_id');
    }
}
