<?php

namespace ViKon\EveSDE\Models\Station;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Station\OperationService
 *
 * @property integer                                     $operation_id
 * @property integer                                     $service_id
 * @property-read \ViKon\EveSDE\Models\Station\Operation $operation
 * @property-read \ViKon\EveSDE\Models\Station\Service   $service
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\OperationService
 *         whereOperationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\OperationService
 *         whereServiceId($value)
 */
class OperationService extends Model {
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
    protected $table = 'sta_operation_services';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'sta_operation_services';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function operation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\Operation', 'operation_id', 'operation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\Service', 'service_id', 'service_id');
    }
}
