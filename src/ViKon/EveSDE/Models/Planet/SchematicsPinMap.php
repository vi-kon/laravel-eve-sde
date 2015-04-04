<?php

namespace ViKon\EveSDE\Models\Planet;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Planet\SchematicsPinMap
 *
 * @property integer                                    $schematic_id
 * @property integer                                    $pin_type_id
 * @property-read \ViKon\EveSDE\Models\Planet\Schematic $schematic
 * @property-read \ViKon\EveSDE\Models\Inventory\Type   $pinType
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Planet\SchematicsPinMap
 *         whereSchematicId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Planet\SchematicsPinMap
 *         wherePinTypeId($value)
 */
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function schematic() {
        return $this->belongsTo('ViKon\EveSDE\Models\Planet\Schematic', 'schematic_id', 'schematic_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pinType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'pin_type_id');
    }
}
