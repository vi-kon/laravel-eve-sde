<?php

namespace ViKon\EveSDE\Models\Planet;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Schematic
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Planet
 * @property integer                                            $schematic_id
 * @property string                                             $schematic_name
 * @property integer                                            $cycle_time
 * @property-read \ViKon\EveSDE\Models\Planet\SchematicsPinMap  $schematicsPinMap
 * @property-read \ViKon\EveSDE\Models\Planet\SchematicsTypeMap $schematicsTypeMap
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function schematicsPinMap() {
        return $this->belongsTo('ViKon\EveSDE\Models\Planet\SchematicsPinMap', 'schematic_id', 'schematic_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function schematicsTypeMap() {
        return $this->belongsTo('ViKon\EveSDE\Models\Planet\SchematicsTypeMap', 'schematic_id', 'schematic_id');
    }
}
