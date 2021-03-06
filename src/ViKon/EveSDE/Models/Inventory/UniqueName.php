<?php

namespace ViKon\EveSDE\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Inventory\UniqueName
 *
 * @property integer                                   $item_id
 * @property string                                    $item_name
 * @property integer                                   $group_id
 * @property-read \ViKon\EveSDE\Models\Inventory\Group $group
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\UniqueName whereItemId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\UniqueName whereItemName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\UniqueName whereGroupId($value)
 */
class UniqueName extends Model {
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
    protected $table = 'inv_unique_names';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'inv_unique_names';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Group', 'group_id', 'group_id');
    }
}
