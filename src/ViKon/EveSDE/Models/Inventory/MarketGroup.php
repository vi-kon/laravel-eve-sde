<?php

namespace ViKon\EveSDE\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Inventory\MarketGroup
 *
 * @property integer
 *           $market_group_id
 * @property integer
 *           $parent_group_id
 * @property string
 *           $market_group_name
 * @property string                                                                                     $description
 * @property integer                                                                                    $icon_id
 * @property boolean                                                                                    $has_types
 * @property-read \ViKon\EveSDE\Models\Inventory\MarketGroup                                            $parentGroup
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Inventory\MarketGroup[] $marketGroups
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Inventory\Type[]        $types
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\MarketGroup
 *         whereMarketGroupId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\MarketGroup
 *         whereParentGroupId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\MarketGroup
 *         whereMarketGroupName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\MarketGroup
 *         whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\MarketGroup whereIconId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\MarketGroup whereHasTypes($value)
 */
class MarketGroup extends Model {
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
    protected $table = 'inv_market_groups';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'inv_market_groups';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parentGroup() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\MarketGroup', 'market_group_id', 'parent_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function marketGroups() {
        return $this->hasMany('ViKon\EveSDE\Models\Inventory\MarketGroup', 'parent_group_id', 'market_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function types() {
        return $this->hasMany('ViKon\EveSDE\Models\Inventory\Type', 'market_group_id', 'market_group_id');
    }
}
