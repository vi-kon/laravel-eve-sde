<?php

namespace ViKon\EveSDE\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Inventory\MetaGroup
 *
 * @property integer                                                                                 $meta_group_id
 * @property string                                                                                  $meta_group_name
 * @property string                                                                                  $description
 * @property integer                                                                                 $icon_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Inventory\MetaType[] $metaTypes
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\MetaGroup whereMetaGroupId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\MetaGroup whereMetaGroupName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\MetaGroup whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\MetaGroup whereIconId($value)
 */
class MetaGroup extends Model {
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
    protected $table = 'inv_meta_groups';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'inv_meta_groups';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function metaTypes() {
        return $this->hasMany('ViKon\EveSDE\Models\Inventory\MetaType', 'meta_group_id', 'meta_group_id');
    }
}
