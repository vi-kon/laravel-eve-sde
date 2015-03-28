<?php

namespace ViKon\EveSDE\Models\Corporation;

use Illuminate\Database\Eloquent\Model;

class NPCCorporationTrade extends Model {
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
    protected $table = 'crp_n_p_c_corporation_trades';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'crp_n_p_c_corporation_trades';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Types', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function corporation() {
        return $this->hasOne('ViKon\EveSDE\Models\Corporation\NPCCorporations', 'corporation_id', 'corporation_id');
    }
}
