<?php

namespace ViKon\EveSDE\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContrabandType
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Inventory
 * @property integer                                     $faction_id
 * @property integer                                     $type_id
 * @property float                                       $standing_loss
 * @property float                                       $confiscate_min_sec
 * @property float                                       $fine_by_value
 * @property float                                       $attack_min_sec
 * @property-read \ViKon\EveSDE\Models\Character\Faction $faction
 * @property-read \ViKon\EveSDE\Models\Inventory\Type    $type
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\ContrabandType
 *         whereFactionId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\ContrabandType whereTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\ContrabandType
 *         whereStandingLoss($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\ContrabandType
 *         whereConfiscateMinSec($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\ContrabandType
 *         whereFineByValue($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\ContrabandType
 *         whereAttackMinSec($value)
 */
class ContrabandType extends Model {
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
    protected $table = 'inv_contraband_types';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'inv_contraband_types';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function faction() {
        return $this->hasOne('ViKon\EveSDE\Models\Character\Faction', 'faction_id', 'faction_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'type_id');
    }
}
