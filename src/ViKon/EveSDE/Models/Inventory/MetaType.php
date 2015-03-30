<?php

namespace ViKon\EveSDE\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MetaType
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Inventory
 * @property integer                                       $type_id
 * @property integer                                       $parent_type_id
 * @property integer                                       $meta_group_id
 * @property-read \ViKon\EveSDE\Models\Inventory\Type      $type
 * @property-read \ViKon\EveSDE\Models\Inventory\Type      $parentType
 * @property-read \ViKon\EveSDE\Models\Inventory\MetaGroup $metaGroup
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\MetaType whereTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\MetaType whereParentTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\MetaType whereMetaGroupId($value)
 */
class MetaType extends Model {
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
    protected $table = 'inv_meta_types';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'inv_meta_types';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parentType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'parent_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function metaGroup() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\MetaGroup', 'meta_group_id', 'meta_group_id');
    }
}
