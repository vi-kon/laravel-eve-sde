<?php

namespace ViKon\EveSDE\Models\Damage;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttributeType
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Damage
 * @property integer                                            $attribute_id
 * @property string                                             $attribute_name
 * @property string                                             $description
 * @property integer                                            $icon_id
 * @property float                                              $default_value
 * @property boolean                                            $published
 * @property string                                             $display_name
 * @property integer                                            $unit_id
 * @property boolean                                            $stackable
 * @property boolean                                            $high_is_good
 * @property integer                                            $category_id
 * @property-read \ViKon\EveSDE\Models\EveUnit                  $unit
 * @property-read \ViKon\EveSDE\Models\Damage\AttributeCategory $category
 * @property-read \ViKon\EveSDE\Models\Damage\TypeAttribute     $typeAttributes
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\AttributeType whereAttributeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\AttributeType
 *         whereAttributeName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\AttributeType whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\AttributeType whereIconId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\AttributeType
 *         whereDefaultValue($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\AttributeType wherePublished($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\AttributeType whereDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\AttributeType whereUnitId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\AttributeType whereStackable($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\AttributeType whereHighIsGood($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\AttributeType whereCategoryId($value)
 */
class AttributeType extends Model {
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
    protected $table = 'dgm_attribute_types';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'dgm_attribute_types';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unit() {
        return $this->belongsTo('ViKon\EveSDE\Models\EveUnit', 'unit_id', 'unit_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category() {
        return $this->belongsTo('ViKon\EveSDE\Models\Damage\AttributeCategory', 'category_id', 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function typeAttributes() {
        return $this->belongsTo('ViKon\EveSDE\Models\Damage\TypeAttribute', 'attribute_id', 'attribute_id');
    }
}
