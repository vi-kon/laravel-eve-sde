<?php

namespace ViKon\EveSDE\Models\War;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CombatZone
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\War
 * @property integer                                                                                   $combat_zone_id
 * @property string
 *           $combat_zone_name
 * @property integer                                                                                   $faction_id
 * @property integer
 *           $center_system_id
 * @property string                                                                                    $description
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\War\CombatZoneSystem[]
 *                $combatZoneSystems
 * @property-read \ViKon\EveSDE\Models\Character\Faction                                               $faction
 * @property-read \ViKon\EveSDE\Models\Map\SolarSystem                                                 $centerSystem
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\War\CombatZone whereCombatZoneId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\War\CombatZone whereCombatZoneName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\War\CombatZone whereFactionId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\War\CombatZone whereCenterSystemId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\War\CombatZone whereDescription($value)
 */
class CombatZone extends Model {
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
    protected $table = 'war_combat_zones';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'war_combat_zones';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function combatZoneSystems() {
        return $this->hasMany('ViKon\EveSDE\Models\War\CombatZoneSystem', 'combat_zone_id', 'combat_zone_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faction() {
        return $this->belongsTo('ViKon\EveSDE\Models\Character\Faction', 'faction_id', 'faction_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function centerSystem() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\SolarSystem', 'solar_system_id', 'center_system_id');
    }
}
