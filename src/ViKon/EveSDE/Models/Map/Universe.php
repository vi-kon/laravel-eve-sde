<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Universe
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Map
 * @property integer $universe_id
 * @property string  $universe_name
 * @property float   $x
 * @property float   $y
 * @property float   $z
 * @property float   $x_min
 * @property float   $x_max
 * @property float   $y_min
 * @property float   $y_max
 * @property float   $z_min
 * @property float   $z_max
 * @property float   $radius
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Universe whereUniverseId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Universe whereUniverseName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Universe whereX($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Universe whereY($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Universe whereZ($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Universe whereXMin($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Universe whereXMax($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Universe whereYMin($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Universe whereYMax($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Universe whereZMin($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Universe whereZMax($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Map\Universe whereRadius($value)
 */
class Universe extends Model {
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
    protected $table = 'map_universe';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'map_universe';


}
