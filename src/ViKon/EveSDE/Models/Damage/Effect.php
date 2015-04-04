<?php

namespace ViKon\EveSDE\Models\Damage;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Damage\Effect
 *
 * @property integer                                                                                $effect_id
 * @property string                                                                                 $effect_name
 * @property integer                                                                                $effect_category
 * @property integer                                                                                $pre_expression
 * @property integer                                                                                $post_expression
 * @property string                                                                                 $description
 * @property string                                                                                 $guid
 * @property integer                                                                                $icon_id
 * @property boolean                                                                                $is_offensive
 * @property boolean                                                                                $is_assistance
 * @property integer
 *           $duration_attribute_id
 * @property integer
 *           $tracking_speed_attribute_id
 * @property integer
 *           $discharge_attribute_id
 * @property integer                                                                                $range_attribute_id
 * @property integer
 *           $falloff_attribute_id
 * @property boolean
 *           $disallow_auto_repeat
 * @property boolean                                                                                $published
 * @property string                                                                                 $display_name
 * @property boolean                                                                                $is_warp_safe
 * @property boolean                                                                                $range_chance
 * @property boolean                                                                                $electronic_chance
 * @property boolean                                                                                $propulsion_chance
 * @property integer                                                                                $distribution
 * @property string                                                                                 $sfx_name
 * @property integer
 *           $npc_usage_chance_attribute_id
 * @property integer
 *           $npc_activation_chance_attribute_id
 * @property integer
 *           $fitting_usage_chance_attribute_id
 * @property string                                                                                 $modifier_info
 * @property-read \ViKon\EveSDE\Models\Damage\AttributeType                                         $durationAttribute
 * @property-read \ViKon\EveSDE\Models\Damage\AttributeType
 *                $trackingSpeedAttribute
 * @property-read \ViKon\EveSDE\Models\Damage\AttributeType                                         $dischargeAttribute
 * @property-read \ViKon\EveSDE\Models\Damage\AttributeType                                         $rangeAttribute
 * @property-read \ViKon\EveSDE\Models\Damage\AttributeType                                         $falloffAttribute
 * @property-read \ViKon\EveSDE\Models\Damage\AttributeType
 *                $npcUsageChanceAttribute
 * @property-read \ViKon\EveSDE\Models\Damage\AttributeType
 *                $npcActivationChanceAttribute
 * @property-read \ViKon\EveSDE\Models\Damage\AttributeType
 *                $fittingUsageChanceAttribute
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Damage\TypeEffect[] $typeEffects
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect whereEffectId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect whereEffectName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect whereEffectCategory($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect wherePreExpression($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect wherePostExpression($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect whereGuid($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect whereIconId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect whereIsOffensive($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect whereIsAssistance($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect
 *         whereDurationAttributeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect
 *         whereTrackingSpeedAttributeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect
 *         whereDischargeAttributeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect whereRangeAttributeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect whereFalloffAttributeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect whereDisallowAutoRepeat($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect wherePublished($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect whereDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect whereIsWarpSafe($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect whereRangeChance($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect whereElectronicChance($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect wherePropulsionChance($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect whereDistribution($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect whereSfxName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect
 *         whereNpcUsageChanceAttributeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect
 *         whereNpcActivationChanceAttributeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect
 *         whereFittingUsageChanceAttributeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Effect whereModifierInfo($value)
 */
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function typeEffects() {
        return $this->hasMany('ViKon\EveSDE\Models\Damage\TypeEffect', 'effect_id', 'effect_id');
    }
}
