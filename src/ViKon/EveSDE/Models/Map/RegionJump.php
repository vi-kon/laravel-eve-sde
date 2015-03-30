<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

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
