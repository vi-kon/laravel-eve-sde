<?php

namespace ViKon\EveSDE\Models\Station;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model {
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
    protected $table = 'sta_operations';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'sta_operations';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function operationServices() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\OperationService', 'operation_id', 'operation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function activity() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\Activity', 'activity_id', 'activity_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function caldariStationType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\StationType', 'station_type_id', 'caldari_station_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function minmatarStationType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\StationType', 'station_type_id', 'minmatar_station_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function amarrStationType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\StationType', 'station_type_id', 'amarr_station_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gallenteStationType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\StationType', 'station_type_id', 'gallente_station_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function joveStationType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\StationType', 'station_type_id', 'jove_station_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stationTypes() {
        return $this->hasMany('ViKon\EveSDE\Models\Station\StationType', 'operation_id', 'operation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stations() {
        return $this->hasMany('ViKon\EveSDE\Models\Station\Station', 'operation_id', 'operation_id');
    }
}
