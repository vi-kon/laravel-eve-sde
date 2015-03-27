<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

class Regions extends Model {
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
        return $this->hasMany('ViKon\EveSDE\Models\Map\Constellations', 'region_id', 'region_id');
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
    public function faction() {
        return $this->belongsTo('ViKon\EveSDE\Models\Character\Factions', 'faction_id', 'faction_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function solarSystems() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\SolarSystems', 'region_id', 'region_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assemblyLineStations() {
        return $this->hasMany('ViKon\EveSDE\Models\Ram\AssemblyLineStations', 'region_id', 'region_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stations() {
        return $this->hasMany('ViKon\EveSDE\Models\Station\Stations', 'region_id', 'region_id');
    }
}
