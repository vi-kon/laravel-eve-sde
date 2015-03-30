<?php

namespace ViKon\EveSDE\Models\Damage;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeEffect
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Damage
 * @property integer                                  $type_id
 * @property integer                                  $effect_id
 * @property boolean                                  $is_default
 * @property-read \ViKon\EveSDE\Models\Inventory\Type $type
 * @property-read \ViKon\EveSDE\Models\Damage\Effect  $effect
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\TypeEffect whereTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\TypeEffect whereEffectId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\TypeEffect whereIsDefault($value)
 */
class TypeEffect extends Model {
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
    protected $table = 'dgm_type_effects';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'dgm_type_effects';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function effect() {
        return $this->hasOne('ViKon\EveSDE\Models\Damage\Effect', 'effect_id', 'effect_id');
    }
}
