<?php

namespace ViKon\EveSDE\Models\Damage;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeAttribute
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Damage
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
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function attribute() {
        return $this->hasOne('ViKon\EveSDE\Models\Damage\AttributeType', 'attribute_id', 'attribute_id');
    }
}
