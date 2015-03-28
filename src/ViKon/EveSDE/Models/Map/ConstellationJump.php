<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

class ConstellationJump extends Model {
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
    protected $table = 'map_constellation_jumps';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'map_constellation_jumps';


}
