<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Map\Denormalize
 *
 * @property integer                                                                              $item_id
 * @property integer                                                                              $type_id
 * @property integer                                                                              $group_id
 * @property integer                                                                              $solar_system_id
 * @property integer                                                                              $constellation_id
 * @property integer                                                                              $region_id
 * @property integer                                                                              $orbit_id
 * @property float                                                                                $x
 * @property float                                                                                $y
 * @property float                                                                                $z
 * @property float                                                                                $radius
 * @property string                                                                               $item_name
 * @property float                                                                                $security
 * @property integer                                                                              $celestial_index
 * @property integer                                                                              $orbit_index
 * @property-read \ViKon\EveSDE\Models\Map\CelestialStatistic                                     $celestialStatistic
 * @property-read \ViKon\EveSDE\Models\Inventory\Type                                             $type
 * @property-read \ViKon\EveSDE\Models\Inventory\Group                                            $group
 * @property-read \ViKon\EveSDE\Models\Map\SolarSystem                                            $solarSystem
 * @property-read \ViKon\EveSDE\Models\Map\Constellation                                          $constellation
 * @property-read \ViKon\EveSDE\Models\Map\Region                                                 $region
 * @property-read \ViKon\EveSDE\Models\Map\Denormalize                                            $orbit
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Map\Denormalize[] $denormalizes
 * @property-read \ViKon\EveSDE\Models\Map\Jump                                                   $jump
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Map\Jump[]        $jumps
 * @property-read \ViKon\EveSDE\Models\Map\LocationScene                                          $locationScene
 * @property-read \ViKon\EveSDE\Models\Map\LocationWormholeClass                                  $locationWormholeClass
 * @property-read \ViKon\EveSDE\Models\Station\Station                                            $station
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Denormalize whereItemId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Denormalize whereTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Denormalize whereGroupId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Denormalize whereSolarSystemId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Denormalize whereConstellationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Denormalize whereRegionId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Denormalize whereOrbitId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Denormalize whereX($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Denormalize whereY($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Denormalize whereZ($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Denormalize whereRadius($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Denormalize whereItemName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Denormalize whereSecurity($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Denormalize whereCelestialIndex($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Denormalize whereOrbitIndex($value)
 */
class Denormalize extends Model {
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
    protected $table = 'map_denormalize';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'map_denormalize';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function celestialStatistic() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\CelestialStatistic', 'item_id', 'celestial_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Group', 'group_id', 'group_id');
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function orbit() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Denormalize', 'item_id', 'orbit_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function denormalizes() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\Denormalize', 'orbit_id', 'item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jump() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Jump', 'item_id', 'stargate_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jumps() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\Jump', 'destination_id', 'item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function locationScene() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\LocationScene', 'item_id', 'location_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function locationWormholeClass() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\LocationWormholeClass', 'item_id', 'location_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function station() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\Station', 'item_id', 'station_id');
    }
}
