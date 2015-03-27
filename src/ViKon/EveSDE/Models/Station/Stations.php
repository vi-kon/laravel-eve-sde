<?php

namespace ViKon\EveSDE\Models\Station;

use Illuminate\Database\Eloquent\Model;

class Stations extends Model {
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
    protected $table = 'sta_stations';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'sta_stations';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Regions', 'region_id', 'region_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function station() {
        return $this->hasOne('ViKon\EveSDE\Models\Map\Denormalize', 'item_id', 'station_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function operation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\Operations', 'operation_id', 'operation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stationType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\StationTypes', 'station_type_id', 'station_type_id');
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
    public function solarSystem() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\SolarSystems', 'solar_system_id', 'solar_system_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function constellation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Constellations', 'constellation_id', 'constellation_id');
    }
}
