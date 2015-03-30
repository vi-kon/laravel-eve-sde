<?php

namespace ViKon\EveSDE\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Item
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Inventory
 * @property integer                                                                             $item_id
 * @property integer                                                                             $type_id
 * @property integer                                                                             $owner_id
 * @property integer                                                                             $location_id
 * @property integer                                                                             $flag_id
 * @property integer                                                                             $quantity
 * @property-read \ViKon\EveSDE\Models\Inventory\Item                                            $location
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Inventory\Item[] $items
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Item whereItemId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Item whereTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Item whereOwnerId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Item whereLocationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Item whereFlagId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Item whereQuantity($value)
 */
class Item extends Model {
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
    protected $table = 'inv_items';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'inv_items';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Item', 'item_id', 'location_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items() {
        return $this->hasMany('ViKon\EveSDE\Models\Inventory\Item', 'location_id', 'item_id');
    }
}
