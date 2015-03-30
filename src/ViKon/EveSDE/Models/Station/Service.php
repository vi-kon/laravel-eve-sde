<?php

namespace ViKon\EveSDE\Models\Station;

use Illuminate\Database\Eloquent\Model;

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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function operationServices() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\OperationService', 'service_id', 'service_id');
    }
}
