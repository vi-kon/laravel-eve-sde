<?php

namespace ViKon\EveSDE\Models\Damage;

use Illuminate\Database\Eloquent\Model;

class Expression extends Model {
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
    protected $table = 'dgm_expressions';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'dgm_expressions';


}
