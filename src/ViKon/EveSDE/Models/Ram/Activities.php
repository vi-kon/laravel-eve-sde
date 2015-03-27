<?php

namespace ViKon\EveSDE\Models\Ram;

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
    protected $table = 'ram_activities';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'ram_activities';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assemblyLineTypes() {
        return $this->hasMany('ViKon\EveSDE\Models\Ram\AssemblyLineTypes', 'activity_id', 'activity_id');
    }
}
