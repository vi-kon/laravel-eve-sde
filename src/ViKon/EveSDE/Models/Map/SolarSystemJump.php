<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Map\SolarSystemJump
 *
 * @property integer                                     $from_region_id
 * @property integer                                     $from_constellation_id
 * @property integer                                     $from_solar_system_id
 * @property integer                                     $to_solar_system_id
 * @property integer                                     $to_constellation_id
 * @property integer                                     $to_region_id
 * @property-read \ViKon\EveSDE\Models\Map\Region        $fromRegion
 * @property-read \ViKon\EveSDE\Models\Map\Constellation $fromConstellation
 * @property-read \ViKon\EveSDE\Models\Map\SolarSystem   $fromSolarSystem
 * @property-read \ViKon\EveSDE\Models\Map\SolarSystem   $toSolarSystem
 * @property-read \ViKon\EveSDE\Models\Map\Constellation $toConstellation
 * @property-read \ViKon\EveSDE\Models\Map\Region        $toRegion
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystemJump whereFromRegionId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystemJump
 *         whereFromConstellationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystemJump
 *         whereFromSolarSystemId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystemJump
 *         whereToSolarSystemId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystemJump
 *         whereToConstellationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\SolarSystemJump whereToRegionId($value)
 */
class SolarSystemJump extends Model {
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
    protected $table = 'map_solar_system_jumps';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'map_solar_system_jumps';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fromRegion() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Region', 'region_id', 'from_region_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fromConstellation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Constellation', 'constellation_id', 'from_constellation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fromSolarSystem() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\SolarSystem', 'solar_system_id', 'from_solar_system_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function toSolarSystem() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\SolarSystem', 'solar_system_id', 'to_solar_system_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function toConstellation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Constellation', 'constellation_id', 'to_constellation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function toRegion() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Region', 'region_id', 'to_region_id');
    }
}
