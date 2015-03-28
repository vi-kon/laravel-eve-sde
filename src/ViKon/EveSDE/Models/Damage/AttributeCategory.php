<?php

namespace ViKon\EveSDE\Models\Damage;

use Illuminate\Database\Eloquent\Model;

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
        return $this->hasMany('ViKon\EveSDE\Models\Damage\AttributeTypes', 'category_id', 'category_id');
    }
}
