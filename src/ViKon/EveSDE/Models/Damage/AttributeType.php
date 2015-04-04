<?php

namespace ViKon\EveSDE\Models\Damage;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Damage\AttributeType
 *
 * @property integer                                                                                   $attribute_id
 * @property string                                                                                    $attribute_name
 * @property string                                                                                    $description
 * @property integer                                                                                   $icon_id
 * @property float                                                                                     $default_value
 * @property boolean                                                                                   $published
 * @property string                                                                                    $display_name
 * @property integer                                                                                   $unit_id
 * @property boolean                                                                                   $stackable
 * @property boolean                                                                                   $high_is_good
 * @property integer                                                                                   $category_id
 * @property-read \ViKon\EveSDE\Models\EveUnit                                                         $unit
 * @property-read \ViKon\EveSDE\Models\Damage\AttributeCategory                                        $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Damage\TypeAttribute[] $typeAttributes
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

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function effects() {
//        return $this->hasMany('ViKon\EveSDE\Models\Damage\Effect', 'duration_attribute_id', 'attribute_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function effects() {
//        return $this->hasMany('ViKon\EveSDE\Models\Damage\Effect', 'tracking_speed_attribute_id', 'attribute_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function effects() {
//        return $this->hasMany('ViKon\EveSDE\Models\Damage\Effect', 'discharge_attribute_id', 'attribute_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function effects() {
//        return $this->hasMany('ViKon\EveSDE\Models\Damage\Effect', 'range_attribute_id', 'attribute_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function effects() {
//        return $this->hasMany('ViKon\EveSDE\Models\Damage\Effect', 'falloff_attribute_id', 'attribute_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function effects() {
//        return $this->hasMany('ViKon\EveSDE\Models\Damage\Effect', 'npc_usage_chance_attribute_id', 'attribute_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function effects() {
//        return $this->hasMany('ViKon\EveSDE\Models\Damage\Effect', 'npc_activation_chance_attribute_id', 'attribute_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function effects() {
//        return $this->hasMany('ViKon\EveSDE\Models\Damage\Effect', 'fitting_usage_chance_attribute_id', 'attribute_id');
//    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function typeAttributes() {
        return $this->hasMany('ViKon\EveSDE\Models\Damage\TypeAttribute', 'attribute_id', 'attribute_id');
    }
}
