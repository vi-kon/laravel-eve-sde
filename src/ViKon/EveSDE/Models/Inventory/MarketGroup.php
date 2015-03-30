<?php

namespace ViKon\EveSDE\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

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
