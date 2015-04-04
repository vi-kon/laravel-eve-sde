<?php

namespace ViKon\EveSDE\Models\Station;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Station\Service
 *
 * @property integer                                                                                       $service_id
 * @property string
 *           $service_name
 * @property string                                                                                        $description
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Station\OperationService[]
 *                $operationServices
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Service whereServiceId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Service whereServiceName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Station\Service whereDescription($value)
 */
class Service extends Model {
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
    protected $table = 'sta_services';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'sta_services';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function operationServices() {
        return $this->hasMany('ViKon\EveSDE\Models\Station\OperationService', 'service_id', 'service_id');
    }
}
