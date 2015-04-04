<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Map\ConstellationJump
 *
 * @property integer $from_region_id
 * @property integer $from_constellation_id
 * @property integer $to_constellation_id
 * @property integer $to_region_id
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\ConstellationJump
 *         whereFromRegionId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\ConstellationJump
 *         whereFromConstellationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\ConstellationJump
 *         whereToConstellationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\ConstellationJump whereToRegionId($value)
 */
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
