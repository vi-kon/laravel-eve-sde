<?php

namespace ViKon\EveSDE\Models\Corporation;

use Illuminate\Database\Eloquent\Model;

class NPCDivisions extends Model {
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
    protected $table = 'crp_n_p_c_divisions';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'crp_n_p_c_divisions';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agents() {
        return $this->hasMany('ViKon\EveSDE\Models\Agent\Agents', 'division_id', 'division_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nPCCorporationDivisions() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporationDivisions', 'division_id', 'division_id');
    }
}
