<?php

namespace ViKon\EveSDE\Models\Planet;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Planet\SchematicsTypeMap
 *
 * @property integer                                    $schematic_id
 * @property integer                                    $type_id
 * @property integer                                    $quantity
 * @property boolean                                    $is_input
 * @property-read \ViKon\EveSDE\Models\Planet\Schematic $schematic
 * @property-read \ViKon\EveSDE\Models\Inventory\Type   $type
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Planet\SchematicsTypeMap
 *         whereSchematicId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Planet\SchematicsTypeMap whereTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Planet\SchematicsTypeMap
 *         whereQuantity($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Planet\SchematicsTypeMap whereIsInput($value)
 */
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function schematic() {
        return $this->belongsTo('ViKon\EveSDE\Models\Planet\Schematic', 'schematic_id', 'schematic_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'type_id');
    }
}
