<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Map\Landmark
 *
 * @property integer                                   $landmark_id
 * @property string                                    $landmark_name
 * @property string                                    $description
 * @property integer                                   $location_id
 * @property float                                     $x
 * @property float                                     $y
 * @property float                                     $z
 * @property integer                                   $icon_id
 * @property-read \ViKon\EveSDE\Models\Map\SolarSystem $location
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Landmark whereLandmarkId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Landmark whereLandmarkName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Landmark whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Landmark whereLocationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Landmark whereX($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Landmark whereY($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Landmark whereZ($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Landmark whereIconId($value)
 */
class Landmark extends Model {
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
    protected $table = 'map_landmarks';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'map_landmarks';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\SolarSystem', 'solar_system_id', 'location_id');
    }
}
