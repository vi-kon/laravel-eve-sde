<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SolarSystem
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Map
 * @property integer                                                                                         $region_id
 * @property integer
 *           $constellation_id
 * @property integer
 *           $solar_system_id
 * @property string
 *           $solar_system_name
 * @property float                                                                                           $x
 * @property float                                                                                           $y
 * @property float                                                                                           $z
 * @property float                                                                                           $x_min
 * @property float                                                                                           $x_max
 * @property float                                                                                           $y_min
 * @property float                                                                                           $y_max
 * @property float                                                                                           $z_min
 * @property float                                                                                           $z_max
 * @property float
 *           $luminosity
 * @property boolean                                                                                         $border
 * @property boolean                                                                                         $fringe
 * @property boolean                                                                                         $corridor
 * @property boolean                                                                                         $hub
 * @property boolean
 *           $international
 * @property boolean                                                                                         $regional
 * @property \ViKon\EveSDE\Models\Map\Constellation
 *           $constellation
 * @property float                                                                                           $security
 * @property integer
 *           $faction_id
 * @property float                                                                                           $radius
 * @property integer
 *           $sun_type_id
 * @property string
 *           $security_class
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Character\Faction[]          $factions
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Corporation\NPCCorporation[]
 *                $nPCCorporations
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Map\Denormalize[]
 *                $denormalize
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Map\Landmark[]               $landmarks
 * @property-read \ViKon\EveSDE\Models\Map\SolarSystemJump
 *                $fromSolarSystemJumps
 * @property-read \ViKon\EveSDE\Models\Map\SolarSystemJump
 *                $toSolarSystemJumps
 * @property-read \ViKon\EveSDE\Models\Map\Region                                                            $region
 * @property-read \ViKon\EveSDE\Models\Inventory\Type                                                        $sunType
 * @property-read \ViKon\EveSDE\Models\Character\Faction                                                     $faction
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Ram\AssemblyLineStation[]
 *                $assemblyLineStations
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Station\Station[]            $stations
 * @property-read \ViKon\EveSDE\Models\War\CombatZoneSystem
 *                $combatZoneSystems
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\War\CombatZone[]
 *                $combatZones
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereRegionId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereConstellationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereSolarSystemId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereSolarSystemName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereX($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereY($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereZ($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereXMin($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereXMax($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereYMin($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereYMax($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereZMin($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereZMax($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereLuminosity($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereBorder($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereFringe($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereCorridor($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereHub($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereInternational($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereRegional($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereConstellation($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereSecurity($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereFactionId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereRadius($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereSunTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystem whereSecurityClass($value)
 */
class SolarSystem extends Model {
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
    protected $table = 'map_solar_systems';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'map_solar_systems';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function factions() {
        return $this->hasMany('ViKon\EveSDE\Models\Character\Faction', 'solar_system_id', 'solar_system_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nPCCorporations() {
        return $this->hasMany('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'solar_system_id', 'solar_system_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function denormalize() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\Denormalize', 'solar_system_id', 'solar_system_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function landmarks() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\Landmark', 'location_id', 'solar_system_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fromSolarSystemJumps() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\SolarSystemJump', 'solar_system_id', 'from_solar_system_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function toSolarSystemJumps() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\SolarSystemJump', 'solar_system_id', 'to_solar_system_id');
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
    public function constellation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Constellation', 'constellation_id', 'constellation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sunType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'sun_type_id');
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
    public function assemblyLineStations() {
        return $this->hasMany('ViKon\EveSDE\Models\Ram\AssemblyLineStation', 'solar_system_id', 'solar_system_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stations() {
        return $this->hasMany('ViKon\EveSDE\Models\Station\Station', 'solar_system_id', 'solar_system_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function combatZoneSystems() {
        return $this->belongsTo('ViKon\EveSDE\Models\War\CombatZoneSystem', 'solar_system_id', 'solar_system_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function combatZones() {
        return $this->hasMany('ViKon\EveSDE\Models\War\CombatZone', 'center_system_id', 'solar_system_id');
    }
}
