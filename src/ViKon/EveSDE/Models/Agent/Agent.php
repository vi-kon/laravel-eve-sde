<?php

namespace ViKon\EveSDE\Models\Agent;

use Illuminate\Database\Eloquent\Model;

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
    public function agentType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Agent\AgentTypes', 'agent_type_id', 'agent_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function division() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCDivisions', 'division_id', 'division_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function corporation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporations', 'corporation_id', 'corporation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function researchAgents() {
        return $this->belongsTo('ViKon\EveSDE\Models\Agent\ResearchAgents', 'agent_id', 'agent_id');
    }
}
