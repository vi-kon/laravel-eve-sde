<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

class LocationWormholeClass extends Model {
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
    protected $table = 'map_location_wormhole_classes';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'map_location_wormhole_classes';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function location() {
        return $this->hasOne('ViKon\EveSDE\Models\Map\Denormalize', 'item_id', 'location_id');
    }
}
