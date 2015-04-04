<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Map\LocationWormholeClass
 *
 * @property integer                                   $location_id
 * @property integer                                   $wormhole_class_id
 * @property-read \ViKon\EveSDE\Models\Map\Denormalize $location
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\LocationWormholeClass
 *         whereLocationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\LocationWormholeClass
 *         whereWormholeClassId($value)
 */
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
