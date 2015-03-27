<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

class SolarSystemJumps extends Model {
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
    protected $table = 'map_solar_system_jumps';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'map_solar_system_jumps';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function toRegion() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Regions', 'region_id', 'to_region_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fromRegion() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Regions', 'region_id', 'from_region_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fromConstellation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Constellations', 'constellation_id', 'from_constellation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function fromSolarSystem() {
        return $this->hasOne('ViKon\EveSDE\Models\Map\SolarSystems', 'solar_system_id', 'from_solar_system_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function toSolarSystem() {
        return $this->hasOne('ViKon\EveSDE\Models\Map\SolarSystems', 'solar_system_id', 'to_solar_system_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function toConstellation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Constellations', 'constellation_id', 'to_constellation_id');
    }
}
