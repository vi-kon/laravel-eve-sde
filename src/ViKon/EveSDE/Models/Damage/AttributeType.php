<?php

namespace ViKon\EveSDE\Models\Damage;

use Illuminate\Database\Eloquent\Model;

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
    public function category() {
        return $this->belongsTo('ViKon\EveSDE\Models\Damage\AttributeCategories', 'category_id', 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unit() {
        return $this->belongsTo('ViKon\EveSDE\Models\EveUnits', 'unit_id', 'unit_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function typeAttributes() {
        return $this->belongsTo('ViKon\EveSDE\Models\Damage\TypeAttributes', 'attribute_id', 'attribute_id');
    }
}
