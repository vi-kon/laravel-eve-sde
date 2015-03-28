<?php

namespace ViKon\EveSDE\Models\Station;

use Illuminate\Database\Eloquent\Model;

class StationType extends Model {
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
    protected $table = 'sta_station_types';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'sta_station_types';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assemblyLineStations() {
        return $this->hasMany('ViKon\EveSDE\Models\Ram\AssemblyLineStations', 'station_type_id', 'station_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function operation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\Operations', 'operation_id', 'operation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function stationType() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Types', 'type_id', 'station_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stations() {
        return $this->hasMany('ViKon\EveSDE\Models\Station\Stations', 'station_type_id', 'station_type_id');
    }
}
