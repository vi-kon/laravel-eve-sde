<?php

namespace ViKon\EveSDE\Models\Character;

use Illuminate\Database\Eloquent\Model;

class Ancestries extends Model {
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
    protected $table = 'chr_ancestries';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'chr_ancestries';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bloodline() {
        return $this->belongsTo('ViKon\EveSDE\Models\Character\Bloodlines', 'bloodline_id', 'bloodline_id');
    }
}
