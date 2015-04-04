<?php

namespace ViKon\EveSDE\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Inventory\TypeMaterial
 *
 * @property integer                                  $type_id
 * @property integer                                  $material_type_id
 * @property integer                                  $quantity
 * @property-read \ViKon\EveSDE\Models\Inventory\Type $type
 * @property-read \ViKon\EveSDE\Models\Inventory\Type $materialType
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\TypeMaterial whereTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\TypeMaterial
 *         whereMaterialTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\TypeMaterial whereQuantity($value)
 */
class TypeMaterial extends Model {
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
    protected $table = 'inv_type_materials';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'inv_type_materials';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function materialType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'material_type_id');
    }
}
