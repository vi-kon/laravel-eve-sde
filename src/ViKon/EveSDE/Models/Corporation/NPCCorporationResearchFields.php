<?php

namespace ViKon\EveSDE\Models\Corporation;

use Illuminate\Database\Eloquent\Model;

class NPCCorporationResearchFields extends Model {
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
    protected $table = 'crp_n_p_c_corporation_research_fields';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'crp_n_p_c_corporation_research_fields';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function corporation() {
        return $this->hasOne('ViKon\EveSDE\Models\Corporation\NPCCorporations', 'corporation_id', 'corporation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function skill() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Types', 'type_id', 'skill_id');
    }
}
