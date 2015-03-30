<?php

namespace ViKon\EveSDE\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

class Type extends Model {
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
    protected $table = 'inv_types';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'inv_types';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function researchAgents() {
        return $this->belongsTo('ViKon\EveSDE\Models\Agent\ResearchAgent', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bloodlines() {
        return $this->hasMany('ViKon\EveSDE\Models\Character\Bloodline', 'ship_type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nPCCorporationResearchFields() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporationResearchField', 'type_id', 'skill_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nPCCorporationTrades() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporationTrade', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function typeAttributes() {
        return $this->belongsTo('ViKon\EveSDE\Models\Damage\TypeAttribute', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function typeEffects() {
        return $this->belongsTo('ViKon\EveSDE\Models\Damage\TypeEffect', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contrabandTypes() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\ContrabandType', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Group', 'group_id', 'group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function race() {
        return $this->belongsTo('ViKon\EveSDE\Models\Character\Race', 'race_id', 'race_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function marketGroup() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\MarketGroup', 'market_group_id', 'market_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function denormalize() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\Denormalize', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function solarSystems() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\SolarSystem', 'sun_type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function schematicsPinMap() {
        return $this->belongsTo('ViKon\EveSDE\Models\Planet\SchematicsPinMap', 'type_id', 'pin_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function schematicsTypeMap() {
        return $this->belongsTo('ViKon\EveSDE\Models\Planet\SchematicsTypeMap', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stationTypes() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\StationType', 'type_id', 'station_type_id');
    }
}
