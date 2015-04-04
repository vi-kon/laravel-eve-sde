<?php

namespace ViKon\EveSDE\Models\Damage;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Damage\TypeAttribute
 *
 * @property integer                                        $type_id
 * @property integer                                        $attribute_id
 * @property integer                                        $value_int
 * @property float                                          $value_float
 * @property-read \ViKon\EveSDE\Models\Inventory\Type       $type
 * @property-read \ViKon\EveSDE\Models\Damage\AttributeType $attribute
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\TypeAttribute whereTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\TypeAttribute whereAttributeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\TypeAttribute whereValueInt($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\TypeAttribute whereValueFloat($value)
 */
class TypeAttribute extends Model {
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
    protected $table = 'dgm_type_attributes';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'dgm_type_attributes';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function attribute() {
        return $this->belongsTo('ViKon\EveSDE\Models\Damage\AttributeType', 'attribute_id', 'attribute_id');
    }
}
