<?php

namespace ViKon\EveSDE\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Position
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Inventory
 * @property integer $item_id
 * @property float   $x
 * @property float   $y
 * @property float   $z
 * @property float   $yaw
 * @property float   $pitch
 * @property float   $roll
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Position whereItemId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Position whereX($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Position whereY($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Position whereZ($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Position whereYaw($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Position wherePitch($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Position whereRoll($value)
 */
class Position extends Model {
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
    protected $table = 'inv_positions';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'inv_positions';


}
