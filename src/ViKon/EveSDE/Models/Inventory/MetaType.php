<?php

namespace ViKon\EveSDE\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function metaGroup() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\MetaGroups', 'meta_group_id', 'meta_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Types', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parentType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Types', 'type_id', 'parent_type_id');
    }
}
