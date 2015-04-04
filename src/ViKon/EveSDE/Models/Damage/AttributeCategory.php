<?php

namespace ViKon\EveSDE\Models\Damage;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Damage\AttributeCategory
 *
 * @property integer                                                                                   $category_id
 * @property string                                                                                    $category_name
 * @property string
 *           $category_description
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Damage\AttributeType[] $attributeTypes
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\AttributeCategory
 *         whereCategoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\AttributeCategory
 *         whereCategoryName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\AttributeCategory
 *         whereCategoryDescription($value)
 */
class AttributeCategory extends Model {
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
    protected $table = 'dgm_attribute_categories';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'dgm_attribute_categories';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attributeTypes() {
        return $this->hasMany('ViKon\EveSDE\Models\Damage\AttributeType', 'category_id', 'category_id');
    }
}
