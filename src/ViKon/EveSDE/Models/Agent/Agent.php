<?php

namespace ViKon\EveSDE\Models\Agent;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Agent
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Agent
 * @property integer                                              $agent_id
 * @property integer                                              $division_id
 * @property integer                                              $corporation_id
 * @property integer                                              $location_id
 * @property integer                                              $level
 * @property integer                                              $quality
 * @property integer                                              $agent_type_id
 * @property boolean                                              $is_locator
 * @property-read \ViKon\EveSDE\Models\Corporation\NPCDivision    $division
 * @property-read \ViKon\EveSDE\Models\Corporation\NPCCorporation $corporation
 * @property-read \ViKon\EveSDE\Models\Agent\AgentType            $agentType
 * @property-read \ViKon\EveSDE\Models\Agent\ResearchAgent        $researchAgents
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Agent\Agent whereAgentId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Agent\Agent whereDivisionId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Agent\Agent whereCorporationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Agent\Agent whereLocationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Agent\Agent whereLevel($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Agent\Agent whereQuality($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Agent\Agent whereAgentTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Agent\Agent whereIsLocator($value)
 */
class Agent extends Model {
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
    protected $table = 'agt_agents';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'agt_agents';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function division() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCDivision', 'division_id', 'division_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function corporation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'corporation_id', 'corporation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agentType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Agent\AgentType', 'agent_type_id', 'agent_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function researchAgents() {
        return $this->belongsTo('ViKon\EveSDE\Models\Agent\ResearchAgent', 'agent_id', 'agent_id');
    }
}
