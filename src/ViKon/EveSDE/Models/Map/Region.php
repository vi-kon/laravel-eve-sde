<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Region
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Map
 * @property integer                                                                                      $region_id
 * @property string                                                                                       $region_name
 * @property float                                                                                        $x
 * @property float                                                                                        $y
 * @property float                                                                                        $z
 * @property float                                                                                        $x_min
 * @property float                                                                                        $x_max
 * @property float                                                                                        $y_min
 * @property float                                                                                        $y_max
 * @property float                                                                                        $z_min
 * @property float                                                                                        $z_max
 * @property integer                                                                                      $faction_id
 * @property float                                                                                        $radius
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Map\Constellation[]
 *                $constellations
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Map\Denormalize[]         $denormalize
 * @property-read \ViKon\EveSDE\Models\Map\RegionJump
 *                $fromRegionJumps
 * @property-read \ViKon\EveSDE\Models\Map\RegionJump
 *                $toRegionJumps
 * @property-read \ViKon\EveSDE\Models\Character\Faction                                                  $faction
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Map\SolarSystemJump[]
 *                $fromSolarSystemJumps
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Map\SolarSystemJump[]
 *                $toSolarSystemJumps
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Map\SolarSystem[]         $solarSystems
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Ram\AssemblyLineStation[]
 *                $assemblyLineStations
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Station\Station[]         $stations
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Region whereRegionId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Region whereRegionName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Region whereX($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Region whereY($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Region whereZ($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Region whereXMin($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Region whereXMax($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Region whereYMin($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Region whereYMax($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Region whereZMin($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Region whereZMax($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Region whereFactionId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Region whereRadius($value)
 */
class Region extends Model {
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
    protected $table = 'map_regions';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'map_regions';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function constellations() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\Constellation', 'region_id', 'region_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function denormalize() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\Denormalize', 'region_id', 'region_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fromRegionJumps() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\RegionJump', 'region_id', 'from_region_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function toRegionJumps() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\RegionJump', 'region_id', 'to_region_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faction() {
        return $this->belongsTo('ViKon\EveSDE\Models\Character\Faction', 'faction_id', 'faction_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fromSolarSystemJumps() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\SolarSystemJump', 'from_region_id', 'region_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function toSolarSystemJumps() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\SolarSystemJump', 'to_region_id', 'region_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function solarSystems() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\SolarSystem', 'region_id', 'region_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assemblyLineStations() {
        return $this->hasMany('ViKon\EveSDE\Models\Ram\AssemblyLineStation', 'region_id', 'region_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stations() {
        return $this->hasMany('ViKon\EveSDE\Models\Station\Station', 'region_id', 'region_id');
    }
}
