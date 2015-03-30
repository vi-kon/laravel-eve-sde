<?php

namespace ViKon\EveSDE\Models\Corporation;

use Illuminate\Database\Eloquent\Model;

class NPCCorporationDivision extends Model {
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
    protected $table = 'crp_n_p_c_corporation_divisions';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'crp_n_p_c_corporation_divisions';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function corporation() {
        return $this->hasOne('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'corporation_id', 'corporation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function division() {
        return $this->hasOne('ViKon\EveSDE\Models\Corporation\NPCDivision', 'division_id', 'division_id');
    }
}
