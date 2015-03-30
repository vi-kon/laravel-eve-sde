<?php

namespace ViKon\EveSDE\Models\Character;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Faction
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Character
 * @property integer
 *           $faction_id
 * @property string
 *           $faction_name
 * @property string
 *           $description
 * @property integer
 *           $race_ids
 * @property integer
 *           $solar_system_id
 * @property integer
 *           $corporation_id
 * @property float
 *           $size_factor
 * @property integer
 *           $station_count
 * @property integer
 *           $station_system_count
 * @property integer
 *           $militia_corporation_id
 * @property integer
 *           $icon_id
 * @property-read \ViKon\EveSDE\Models\Map\SolarSystem
 *                $solarSystem
 * @property-read \ViKon\EveSDE\Models\Corporation\NPCCorporation
 *                $corporation
 * @property-read \ViKon\EveSDE\Models\Corporation\NPCCorporation
 *                $militiaCorporation
 * @property-read \ViKon\EveSDE\Models\Inventory\ContrabandType
 *                $contrabandTypes
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Inventory\ControlTowerResource[]
 *                $controlTowerResources
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Map\Constellation[]
 *                $constellations
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Map\Region[]
 *                $regions
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Map\SolarSystem[]
 *                $solarSystems
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\War\CombatZone[]
 *                $combatZones
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Faction whereFactionId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Faction whereFactionName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Faction whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Faction whereRaceIds($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Faction whereSolarSystemId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Faction whereCorporationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Faction whereSizeFactor($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Faction whereStationCount($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Faction
 *         whereStationSystemCount($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Faction
 *         whereMilitiaCorporationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Faction whereIconId($value)
 */
class Faction extends Model {
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
    protected $table = 'chr_factions';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'chr_factions';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solarSystem() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\SolarSystem', 'solar_system_id', 'solar_system_id');
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
    public function militiaCorporation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'corporation_id', 'militia_corporation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contrabandTypes() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\ContrabandType', 'faction_id', 'faction_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function controlTowerResources() {
        return $this->hasMany('ViKon\EveSDE\Models\Inventory\ControlTowerResource', 'faction_id', 'faction_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function constellations() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\Constellation', 'faction_id', 'faction_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function regions() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\Region', 'faction_id', 'faction_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function solarSystems() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\SolarSystem', 'faction_id', 'faction_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function combatZones() {
        return $this->hasMany('ViKon\EveSDE\Models\War\CombatZone', 'faction_id', 'faction_id');
    }
}
