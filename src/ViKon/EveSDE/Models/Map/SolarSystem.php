<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

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
