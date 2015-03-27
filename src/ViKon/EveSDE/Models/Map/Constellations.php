<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

class Constellations extends Model {
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
    protected $table = 'map_constellations';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'map_constellations';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faction() {
        return $this->belongsTo('ViKon\EveSDE\Models\Character\Factions', 'faction_id', 'faction_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Regions', 'region_id', 'region_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function denormalize() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\Denormalize', 'constellation_id', 'constellation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function solarSystems() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\SolarSystems', 'constellation_id', 'constellation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stations() {
        return $this->hasMany('ViKon\EveSDE\Models\Station\Stations', 'constellation_id', 'constellation_id');
    }
}
