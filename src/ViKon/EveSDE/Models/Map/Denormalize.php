<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Denormalize
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Map
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
 * @property-read \ViKon\EveSDE\Models\Map\CelestialStatistic                                     $celestialStatistics
 * @property-read \ViKon\EveSDE\Models\Inventory\Type                                             $type
 * @property-read \ViKon\EveSDE\Models\Inventory\Group                                            $group
 * @property-read \ViKon\EveSDE\Models\Map\SolarSystem                                            $solarSystem
 * @property-read \ViKon\EveSDE\Models\Map\Constellation                                          $constellation
 * @property-read \ViKon\EveSDE\Models\Map\Region                                                 $region
 * @property-read \ViKon\EveSDE\Models\Map\Denormalize                                            $orbit
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Map\Denormalize[] $denormalize
 * @property-read \ViKon\EveSDE\Models\Map\LocationScene                                          $locationScenes
 * @property-read \ViKon\EveSDE\Models\Map\LocationWormholeClass
 *                $locationWormholeClasses
 * @property-read \ViKon\EveSDE\Models\Station\Station                                            $stations
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
    public function celestialStatistics() {
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
    public function denormalize() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\Denormalize', 'orbit_id', 'item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function locationScenes() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\LocationScene', 'item_id', 'location_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function locationWormholeClasses() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\LocationWormholeClass', 'item_id', 'location_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stations() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\Station', 'item_id', 'station_id');
    }
}
