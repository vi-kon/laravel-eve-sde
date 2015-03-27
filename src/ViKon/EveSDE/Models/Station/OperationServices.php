<?php

namespace ViKon\EveSDE\Models\Station;

use Illuminate\Database\Eloquent\Model;

class OperationServices extends Model {
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
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function service() {
        return $this->hasOne('ViKon\EveSDE\Models\Station\Services', 'service_id', 'service_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function operation() {
        return $this->hasOne('ViKon\EveSDE\Models\Station\Operations', 'operation_id', 'operation_id');
    }
}
