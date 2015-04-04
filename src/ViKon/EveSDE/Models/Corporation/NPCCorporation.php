<?php

namespace ViKon\EveSDE\Models\Corporation;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Corporation\NPCCorporation
 *
 * @property integer
 *             $corporation_id
 * @property string
 *             $size
 * @property string
 *             $extent
 * @property integer
 *             $solar_system_id
 * @property integer
 *             $investor_id1
 * @property integer
 *             $investor_shares1
 * @property integer
 *             $investor_id2
 * @property integer
 *             $investor_shares2
 * @property integer
 *             $investor_id3
 * @property integer
 *             $investor_shares3
 * @property integer
 *             $investor_id4
 * @property integer
 *             $investor_shares4
 * @property integer
 *             $friend_id
 * @property integer
 *             $enemy_id
 * @property integer
 *             $public_shares
 * @property integer
 *             $initial_price
 * @property float
 *             $min_security
 * @property boolean
 *             $scattered
 * @property integer
 *             $fringe
 * @property integer
 *             $corridor
 * @property integer
 *             $hub
 * @property integer
 *             $border
 * @property integer
 *             $faction_id
 * @property float
 *             $size_factor
 * @property integer
 *             $station_count
 * @property integer
 *             $station_system_count
 * @property string
 *             $description
 * @property integer
 *             $icon_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Agent\Agent[]
 *                  $agents
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Character\Bloodline[]
 *                  $bloodlines
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Corporation\NPCCorporationDivision[]
 *                  $nPCCorporationDivisions
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Corporation\NPCCorporationResearchField[]
 *                $nPCCorporationResearchFields
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Corporation\NPCCorporationTrade[]
 *                  $nPCCorporationTrades
 * @property-read \ViKon\EveSDE\Models\Map\SolarSystem
 *                  $solarSystem
 * @property-read \ViKon\EveSDE\Models\Corporation\NPCCorporation
 *                  $investor1
 * @property-read \ViKon\EveSDE\Models\Corporation\NPCCorporation
 *                  $investor2
 * @property-read \ViKon\EveSDE\Models\Corporation\NPCCorporation
 *                  $investor3
 * @property-read \ViKon\EveSDE\Models\Corporation\NPCCorporation
 *                  $investor4
 * @property-read \ViKon\EveSDE\Models\Corporation\NPCCorporation
 *                  $friend
 * @property-read \ViKon\EveSDE\Models\Corporation\NPCCorporation
 *                  $enemy
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Ram\AssemblyLineStation[]
 *                  $assemblyLineStations
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Station\Station[]
 *                  $stations
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereCorporationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation whereSize($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereExtent($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereSolarSystemId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereInvestorId1($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereInvestorShares1($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereInvestorId2($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereInvestorShares2($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereInvestorId3($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereInvestorShares3($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereInvestorId4($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereInvestorShares4($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereFriendId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereEnemyId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         wherePublicShares($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereInitialPrice($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereMinSecurity($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereScattered($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereFringe($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereCorridor($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation whereHub($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereBorder($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereFactionId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereSizeFactor($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereStationCount($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereStationSystemCount($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporation
 *         whereIconId($value)
 */
class NPCCorporation extends Model {
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
    protected $table = 'crp_n_p_c_corporations';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'crp_n_p_c_corporations';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agents() {
        return $this->hasMany('ViKon\EveSDE\Models\Agent\Agent', 'corporation_id', 'corporation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bloodlines() {
        return $this->hasMany('ViKon\EveSDE\Models\Character\Bloodline', 'corporation_id', 'corporation_id');
    }

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function factions() {
//        return $this->hasMany('ViKon\EveSDE\Models\Character\Faction', 'corporation_id', 'corporation_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function factions() {
//        return $this->hasMany('ViKon\EveSDE\Models\Character\Faction', 'militia_corporation_id', 'corporation_id');
//    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nPCCorporationDivisions() {
        return $this->hasMany('ViKon\EveSDE\Models\Corporation\NPCCorporationDivision', 'corporation_id', 'corporation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nPCCorporationResearchFields() {
        return $this->hasMany('ViKon\EveSDE\Models\Corporation\NPCCorporationResearchField', 'corporation_id', 'corporation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nPCCorporationTrades() {
        return $this->hasMany('ViKon\EveSDE\Models\Corporation\NPCCorporationTrade', 'corporation_id', 'corporation_id');
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
    public function investor1() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'corporation_id', 'investor_id1');
    }

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function nPCCorporations() {
//        return $this->hasMany('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'investor_id1', 'corporation_id');
//    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function investor2() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'corporation_id', 'investor_id2');
    }

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function nPCCorporations() {
//        return $this->hasMany('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'investor_id2', 'corporation_id');
//    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function investor3() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'corporation_id', 'investor_id3');
    }

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function nPCCorporations() {
//        return $this->hasMany('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'investor_id3', 'corporation_id');
//    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function investor4() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'corporation_id', 'investor_id4');
    }

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function nPCCorporations() {
//        return $this->hasMany('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'investor_id4', 'corporation_id');
//    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function friend() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'corporation_id', 'friend_id');
    }

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function nPCCorporations() {
//        return $this->hasMany('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'friend_id', 'corporation_id');
//    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enemy() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'corporation_id', 'enemy_id');
    }

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function nPCCorporations() {
//        return $this->hasMany('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'enemy_id', 'corporation_id');
//    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assemblyLineStations() {
        return $this->hasMany('ViKon\EveSDE\Models\Ram\AssemblyLineStation', 'owner_id', 'corporation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stations() {
        return $this->hasMany('ViKon\EveSDE\Models\Station\Station', 'corporation_id', 'corporation_id');
    }
}
