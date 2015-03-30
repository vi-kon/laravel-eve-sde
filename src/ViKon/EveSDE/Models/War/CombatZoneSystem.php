<?php

namespace ViKon\EveSDE\Models\War;

use Illuminate\Database\Eloquent\Model;

class CombatZoneSystem extends Model {
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
    protected $table = 'war_combat_zone_systems';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'war_combat_zone_systems';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function solarSystem() {
        return $this->hasOne('ViKon\EveSDE\Models\Map\SolarSystem', 'solar_system_id', 'solar_system_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function combatZone() {
        return $this->belongsTo('ViKon\EveSDE\Models\War\CombatZone', 'combat_zone_id', 'combat_zone_id');
    }
}
