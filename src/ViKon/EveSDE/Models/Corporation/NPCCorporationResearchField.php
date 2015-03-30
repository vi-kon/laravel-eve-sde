<?php

namespace ViKon\EveSDE\Models\Corporation;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NPCCorporationResearchField
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Corporation
 * @property integer                                              $skill_id
 * @property integer                                              $corporation_id
 * @property-read \ViKon\EveSDE\Models\Inventory\Type             $skill
 * @property-read \ViKon\EveSDE\Models\Corporation\NPCCorporation $corporation
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporationResearchField
 *         whereSkillId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporationResearchField
 *         whereCorporationId($value)
 */
class NPCCorporationResearchField extends Model {
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
    public function skill() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'skill_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function corporation() {
        return $this->hasOne('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'corporation_id', 'corporation_id');
    }
}
