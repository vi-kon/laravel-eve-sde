<?php

namespace ViKon\EveSDE\Models\Corporation;

use Illuminate\Database\Eloquent\Model;

class NPCCorporationDivisions extends Model {
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
    public function division() {
        return $this->hasOne('ViKon\EveSDE\Models\Corporation\NPCDivisions', 'division_id', 'division_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function corporation() {
        return $this->hasOne('ViKon\EveSDE\Models\Corporation\NPCCorporations', 'corporation_id', 'corporation_id');
    }
}
