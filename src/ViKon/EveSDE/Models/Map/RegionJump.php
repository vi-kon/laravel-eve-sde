<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RegionJump
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Map
 * @property integer                              $from_region_id
 * @property integer                              $to_region_id
 * @property-read \ViKon\EveSDE\Models\Map\Region $fromRegion
 * @property-read \ViKon\EveSDE\Models\Map\Region $toRegion
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\RegionJump whereFromRegionId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\RegionJump whereToRegionId($value)
 */
class RegionJump extends Model {
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
    protected $table = 'map_region_jumps';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'map_region_jumps';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function fromRegion() {
        return $this->hasOne('ViKon\EveSDE\Models\Map\Region', 'region_id', 'from_region_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function toRegion() {
        return $this->hasOne('ViKon\EveSDE\Models\Map\Region', 'region_id', 'to_region_id');
    }
}
