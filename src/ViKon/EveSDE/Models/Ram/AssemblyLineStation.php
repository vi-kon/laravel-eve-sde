<?php

namespace ViKon\EveSDE\Models\Ram;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Ram\AssemblyLineStation
 *
 * @property integer                                              $station_id
 * @property integer                                              $assembly_line_type_id
 * @property integer                                              $quantity
 * @property integer                                              $station_type_id
 * @property integer                                              $owner_id
 * @property integer                                              $solar_system_id
 * @property integer                                              $region_id
 * @property-read \ViKon\EveSDE\Models\Map\Region                 $region
 * @property-read \ViKon\EveSDE\Models\Ram\AssemblyLineType       $assemblyLineType
 * @property-read \ViKon\EveSDE\Models\Station\StationType        $stationType
 * @property-read \ViKon\EveSDE\Models\Corporation\NPCCorporation $owner
 * @property-read \ViKon\EveSDE\Models\Map\SolarSystem            $solarSystem
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineStation
 *         whereStationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineStation
 *         whereAssemblyLineTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineStation whereQuantity($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineStation
 *         whereStationTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineStation whereOwnerId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineStation
 *         whereSolarSystemId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\AssemblyLineStation whereRegionId($value)
 */
class AssemblyLineStation extends Model {
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
    protected $table = 'ram_assembly_line_stations';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'ram_assembly_line_stations';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Region', 'region_id', 'region_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function assemblyLineType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Ram\AssemblyLineType', 'assembly_line_type_id', 'assembly_line_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stationType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\StationType', 'station_type_id', 'station_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'corporation_id', 'owner_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solarSystem() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\SolarSystem', 'solar_system_id', 'solar_system_id');
    }
}
