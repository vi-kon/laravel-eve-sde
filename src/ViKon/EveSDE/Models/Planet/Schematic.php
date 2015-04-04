<?php

namespace ViKon\EveSDE\Models\Planet;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Planet\Schematic
 *
 * @property integer
 *           $schematic_id
 * @property string
 *           $schematic_name
 * @property integer                                                                                       $cycle_time
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Planet\SchematicsPinMap[]
 *                $schematicsPinMaps
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Planet\SchematicsTypeMap[]
 *                $schematicsTypeMaps
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Planet\Schematic whereSchematicId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Planet\Schematic whereSchematicName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Planet\Schematic whereCycleTime($value)
 */
class Schematic extends Model {
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
    protected $table = 'planet_schematics';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'planet_schematics';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schematicsPinMaps() {
        return $this->hasMany('ViKon\EveSDE\Models\Planet\SchematicsPinMap', 'schematic_id', 'schematic_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schematicsTypeMaps() {
        return $this->hasMany('ViKon\EveSDE\Models\Planet\SchematicsTypeMap', 'schematic_id', 'schematic_id');
    }
}
