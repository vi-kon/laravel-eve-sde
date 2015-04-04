<?php

namespace ViKon\EveSDE\Models\Agent;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Agent\ResearchAgent
 *
 * @property integer                                  $agent_id
 * @property integer                                  $type_id
 * @property-read \ViKon\EveSDE\Models\Agent\Agent    $agent
 * @property-read \ViKon\EveSDE\Models\Inventory\Type $type
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Agent\ResearchAgent whereAgentId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Agent\ResearchAgent whereTypeId($value)
 */
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agent() {
        return $this->belongsTo('ViKon\EveSDE\Models\Agent\Agent', 'agent_id', 'agent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'type_id');
    }
}
