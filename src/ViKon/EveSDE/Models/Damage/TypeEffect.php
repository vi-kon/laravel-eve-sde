<?php

namespace ViKon\EveSDE\Models\Damage;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Damage\TypeEffect
 *
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function effect() {
        return $this->belongsTo('ViKon\EveSDE\Models\Damage\Effect', 'effect_id', 'effect_id');
    }
}
