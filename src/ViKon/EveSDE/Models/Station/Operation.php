<?php

namespace ViKon\EveSDE\Models\Station;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Station\Operation
 *
 * @property integer                                                                                       $activity_id
 * @property integer
 *           $operation_id
 * @property string
 *           $operation_name
 * @property string                                                                                        $description
 * @property integer                                                                                       $fringe
 * @property integer                                                                                       $corridor
 * @property integer                                                                                       $hub
 * @property integer                                                                                       $border
 * @property integer                                                                                       $ratio
 * @property integer
 *           $caldari_station_type_id
 * @property integer
 *           $minmatar_station_type_id
 * @property integer
 *           $amarr_station_type_id
 * @property integer
 *           $gallente_station_type_id
 * @property integer
 *           $jove_station_type_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Station\OperationService[]
 *                $operationServices
 * @property-read \ViKon\EveSDE\Models\Corporation\Activity                                                $activity
 * @property-read \ViKon\EveSDE\Models\Station\StationType
 *                $caldariStationType
 * @property-read \ViKon\EveSDE\Models\Station\StationType
 *                $minmatarStationType
 * @property-read \ViKon\EveSDE\Models\Station\StationType
 *                $amarrStationType
 * @property-read \ViKon\EveSDE\Models\Station\StationType
 *                $gallenteStationType
 * @property-read \ViKon\EveSDE\Models\Station\StationType
 *                $joveStationType
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Station\StationType[]
 *                $stationTypes
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Station\Station[]          $stations
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Operation whereActivityId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Operation whereOperationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Operation whereOperationName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Operation whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Operation whereFringe($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Operation whereCorridor($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Operation whereHub($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Operation whereBorder($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Operation whereRatio($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Operation
 *         whereCaldariStationTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Operation
 *         whereMinmatarStationTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Operation
 *         whereAmarrStationTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Operation
 *         whereGallenteStationTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Operation
 *         whereJoveStationTypeId($value)
 */
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function operationServices() {
        return $this->hasMany('ViKon\EveSDE\Models\Station\OperationService', 'operation_id', 'operation_id');
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
