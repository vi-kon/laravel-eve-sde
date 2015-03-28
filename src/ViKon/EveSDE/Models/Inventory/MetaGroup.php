<?php

namespace ViKon\EveSDE\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

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
        return $this->hasMany('ViKon\EveSDE\Models\Inventory\MetaTypes', 'meta_group_id', 'meta_group_id');
    }
}
