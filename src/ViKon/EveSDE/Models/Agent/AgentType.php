<?php

namespace ViKon\EveSDE\Models\Agent;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Agent\AgentType
 *
 * @property integer                                                                          $agent_type_id
 * @property string                                                                           $agent_type
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Agent\Agent[] $agents
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Agent\AgentType whereAgentTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Agent\AgentType whereAgentType($value)
 */
class AgentType extends Model {
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
        return $this->hasMany('ViKon\EveSDE\Models\Agent\Agent', 'agent_type_id', 'agent_type_id');
    }
}
