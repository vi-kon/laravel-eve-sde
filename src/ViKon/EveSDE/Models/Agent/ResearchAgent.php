<?php

namespace ViKon\EveSDE\Models\Agent;

use Illuminate\Database\Eloquent\Model;

class ResearchAgent extends Model {
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
    protected $table = 'agt_research_agents';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'agt_research_agents';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function agent() {
        return $this->hasOne('ViKon\EveSDE\Models\Agent\Agent', 'agent_id', 'agent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'type_id');
    }
}
