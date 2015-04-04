<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Map\LocationScene
 *
 * @property integer                                   $location_id
 * @property integer                                   $graphic_id
 * @property-read \ViKon\EveSDE\Models\Map\Denormalize $location
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\LocationScene whereLocationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\LocationScene whereGraphicId($value)
 */
class LocationScene extends Model {
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
    protected $table = 'map_location_scenes';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'map_location_scenes';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function location() {
        return $this->hasOne('ViKon\EveSDE\Models\Map\Denormalize', 'item_id', 'location_id');
    }
}
