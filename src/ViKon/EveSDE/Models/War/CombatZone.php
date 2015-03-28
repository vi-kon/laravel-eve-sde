<?php

namespace ViKon\EveSDE\Models\War;

use Illuminate\Database\Eloquent\Model;

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
        return $this->hasMany('ViKon\EveSDE\Models\War\CombatZoneSystems', 'combat_zone_id', 'combat_zone_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function centerSystem() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\SolarSystems', 'solar_system_id', 'center_system_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faction() {
        return $this->belongsTo('ViKon\EveSDE\Models\Character\Factions', 'faction_id', 'faction_id');
    }
}
