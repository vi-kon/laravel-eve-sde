<?php

namespace ViKon\EveSDE\Models\Corporation;

use Illuminate\Database\Eloquent\Model;

class Activities extends Model {
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
    protected $table = 'crp_activities';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'crp_activities';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function operations() {
        return $this->hasMany('ViKon\EveSDE\Models\Station\Operations', 'activity_id', 'activity_id');
    }
}
