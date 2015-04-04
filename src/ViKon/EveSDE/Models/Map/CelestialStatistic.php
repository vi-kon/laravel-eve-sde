<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Map\CelestialStatistic
 *
 * @property integer                                   $celestial_id
 * @property float                                     $temperature
 * @property string                                    $spectral_class
 * @property float                                     $luminosity
 * @property float                                     $age
 * @property float                                     $life
 * @property float                                     $orbit_radius
 * @property float                                     $eccentricity
 * @property float                                     $mass_dust
 * @property float                                     $mass_gas
 * @property integer                                   $fragmented
 * @property float                                     $density
 * @property float                                     $surface_gravity
 * @property float                                     $escape_velocity
 * @property float                                     $orbit_period
 * @property float                                     $rotation_rate
 * @property integer                                   $locked
 * @property integer                                   $pressure
 * @property integer                                   $radius
 * @property integer                                   $mass
 * @property-read \ViKon\EveSDE\Models\Map\Denormalize $celestial
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\CelestialStatistic
 *         whereCelestialId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\CelestialStatistic
 *         whereTemperature($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\CelestialStatistic
 *         whereSpectralClass($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\CelestialStatistic
 *         whereLuminosity($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\CelestialStatistic whereAge($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\CelestialStatistic whereLife($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\CelestialStatistic
 *         whereOrbitRadius($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\CelestialStatistic
 *         whereEccentricity($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\CelestialStatistic whereMassDust($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\CelestialStatistic whereMassGas($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\CelestialStatistic
 *         whereFragmented($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\CelestialStatistic whereDensity($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\CelestialStatistic
 *         whereSurfaceGravity($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\CelestialStatistic
 *         whereEscapeVelocity($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\CelestialStatistic
 *         whereOrbitPeriod($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\CelestialStatistic
 *         whereRotationRate($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\CelestialStatistic whereLocked($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\CelestialStatistic wherePressure($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\CelestialStatistic whereRadius($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\CelestialStatistic whereMass($value)
 */
class CelestialStatistic extends Model {
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
