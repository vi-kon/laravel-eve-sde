<?php

namespace ViKon\EveSDE\Models\Character;

use Illuminate\Database\Eloquent\Model;

class Factions extends Model {
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
    public function militiaCorporation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporations', 'corporation_id', 'militia_corporation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solarSystem() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\SolarSystems', 'solar_system_id', 'solar_system_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function corporation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporations', 'corporation_id', 'corporation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contrabandTypes() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\ContrabandTypes', 'faction_id', 'faction_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function controlTowerResources() {
        return $this->hasMany('ViKon\EveSDE\Models\Inventory\ControlTowerResources', 'faction_id', 'faction_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function constellations() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\Constellations', 'faction_id', 'faction_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function regions() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\Regions', 'faction_id', 'faction_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function solarSystems() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\SolarSystems', 'faction_id', 'faction_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function combatZones() {
        return $this->hasMany('ViKon\EveSDE\Models\War\CombatZones', 'faction_id', 'faction_id');
    }
}
