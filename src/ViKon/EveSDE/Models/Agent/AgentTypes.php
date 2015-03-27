<?php

namespace ViKon\EveSDE\Models\Agent;

use Illuminate\Database\Eloquent\Model;

class AgentTypes extends Model {
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
    protected $table = 'agt_agent_types';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'agt_agent_types';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agents() {
        return $this->hasMany('ViKon\EveSDE\Models\Agent\Agents', 'agent_type_id', 'agent_type_id');
    }
}
