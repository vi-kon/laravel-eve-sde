<?php

namespace ViKon\EveSDE\Models\Station;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Station\Station
 *
 * @property integer                                              $station_id
 * @property integer                                              $security
 * @property float                                                $docking_cost_per_volume
 * @property float                                                $max_ship_volume_dockable
 * @property integer                                              $office_rental_cost
 * @property integer                                              $operation_id
 * @property integer                                              $station_type_id
 * @property integer                                              $corporation_id
 * @property integer                                              $solar_system_id
 * @property integer                                              $constellation_id
 * @property integer                                              $region_id
 * @property string                                               $station_name
 * @property float                                                $x
 * @property float                                                $y
 * @property float                                                $z
 * @property float                                                $reprocessing_efficiency
 * @property float                                                $reprocessing_stations_take
 * @property integer                                              $reprocessing_hangar_flag
 * @property-read \ViKon\EveSDE\Models\Map\Denormalize            $station
 * @property-read \ViKon\EveSDE\Models\Station\Operation          $operation
 * @property-read \ViKon\EveSDE\Models\Station\StationType        $stationType
 * @property-read \ViKon\EveSDE\Models\Corporation\NPCCorporation $corporation
 * @property-read \ViKon\EveSDE\Models\Map\SolarSystem            $solarSystem
 * @property-read \ViKon\EveSDE\Models\Map\Constellation          $constellation
 * @property-read \ViKon\EveSDE\Models\Map\Region                 $region
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Station whereStationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Station whereSecurity($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Station
 *         whereDockingCostPerVolume($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Station
 *         whereMaxShipVolumeDockable($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Station whereOfficeRentalCost($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Station whereOperationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Station whereStationTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Station whereCorporationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Station whereSolarSystemId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Station whereConstellationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Station whereRegionId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Station whereStationName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Station whereX($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Station whereY($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Station whereZ($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Station
 *         whereReprocessingEfficiency($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Station
 *         whereReprocessingStationsTake($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Station
 *         whereReprocessingHangarFlag($value)
 */
class Station extends Model {
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
    protected $table = 'sta_stations';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'sta_stations';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function station() {
        return $this->hasOne('ViKon\EveSDE\Models\Map\Denormalize', 'item_id', 'station_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function operation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\Operation', 'operation_id', 'operation_id');
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
    public function corporation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'corporation_id', 'corporation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solarSystem() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\SolarSystem', 'solar_system_id', 'solar_system_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function constellation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Constellation', 'constellation_id', 'constellation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Region', 'region_id', 'region_id');
    }
}
