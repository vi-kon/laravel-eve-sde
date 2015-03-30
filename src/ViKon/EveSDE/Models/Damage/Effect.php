<?php

namespace ViKon\EveSDE\Models\Damage;

use Illuminate\Database\Eloquent\Model;

class Effect extends Model {
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
    protected $table = 'dgm_effects';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'dgm_effects';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function durationAttribute() {
        return $this->belongsTo('ViKon\EveSDE\Models\Damage\AttributeType', 'attribute_id', 'duration_attribute_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trackingSpeedAttribute() {
        return $this->belongsTo('ViKon\EveSDE\Models\Damage\AttributeType', 'attribute_id', 'tracking_speed_attribute_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dischargeAttribute() {
        return $this->belongsTo('ViKon\EveSDE\Models\Damage\AttributeType', 'attribute_id', 'discharge_attribute_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rangeAttribute() {
        return $this->belongsTo('ViKon\EveSDE\Models\Damage\AttributeType', 'attribute_id', 'range_attribute_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function falloffAttribute() {
        return $this->belongsTo('ViKon\EveSDE\Models\Damage\AttributeType', 'attribute_id', 'falloff_attribute_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function npcUsageChanceAttribute() {
        return $this->belongsTo('ViKon\EveSDE\Models\Damage\AttributeType', 'attribute_id', 'npc_usage_chance_attribute_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function npcActivationChanceAttribute() {
        return $this->belongsTo('ViKon\EveSDE\Models\Damage\AttributeType', 'attribute_id', 'npc_activation_chance_attribute_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fittingUsageChanceAttribute() {
        return $this->belongsTo('ViKon\EveSDE\Models\Damage\AttributeType', 'attribute_id', 'fitting_usage_chance_attribute_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function typeEffects() {
        return $this->belongsTo('ViKon\EveSDE\Models\Damage\TypeEffect', 'effect_id', 'effect_id');
    }
}
