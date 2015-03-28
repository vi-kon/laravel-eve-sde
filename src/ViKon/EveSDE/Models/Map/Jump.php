<?php

namespace ViKon\EveSDE\Models\Map;

use Illuminate\Database\Eloquent\Model;

class Jump extends Model {
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
    protected $table = 'map_jumps';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'map_jumps';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function destination() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\Denormalize', 'item_id', 'destination_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function stargate() {
        return $this->hasOne('ViKon\EveSDE\Models\Map\Denormalize', 'item_id', 'stargate_id');
    }
}
