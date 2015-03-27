<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

class CelestialStatistics extends Model {
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
    protected $table = 'map_celestial_statistics';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'map_celestial_statistics';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function celestial() {
        return $this->hasOne('ViKon\EveSDE\Models\Map\Denormalize', 'item_id', 'celestial_id');
    }
}
