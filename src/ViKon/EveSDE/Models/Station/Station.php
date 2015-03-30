<?php

namespace ViKon\EveSDE\Models\Station;

use Illuminate\Database\Eloquent\Model;

class Station extends Model {
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
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function station() {
        return $this->hasOne('ViKon\EveSDE\Models\Map\Denormalize', 'item_id', 'station_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function operation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\Operation', 'operation_id', 'operation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stationType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\StationType', 'station_type_id', 'station_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function corporation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'corporation_id', 'corporation_id');
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
    public function constellation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Constellation', 'constellation_id', 'constellation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Region', 'region_id', 'region_id');
    }
}
